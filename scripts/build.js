#!/usr/bin/env node

/**
 * Build script for Maju WordPress Theme
 * 
 * This script:
 * 1. Builds CSS and JS assets
 * 2. Copies clean theme files to build folder
 * 3. Creates a zip file for WordPress upload
 * 4. Optionally copies to Local by Flywheel
 * 
 * @package Maju
 * @since 1.0.0
 */

const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

// Configuration
const config = {
  themeName: 'maju',
  buildDir: './build',
  localPath: '/Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju',
  excludeFromBuild: [
    'node_modules',
    '.git',
    '.gitignore',
    'package.json',
    'package-lock.json',
    'yarn.lock',
    'webpack.config.js',
    'postcss.config.js',
    'tailwind.config.js',
    '.eslintrc.js',
    '.stylelintrc',
    '.prettierrc',
    'scripts',
    'build',
    '.DS_Store',
    '*.log',
    '*.tmp',
    '*.temp',
    '.vscode',
    '.idea',
    '*.swp',
    '*.swo'
  ]
};

/**
 * Log messages with timestamp
 */
function log(message, type = 'info') {
  const timestamp = new Date().toISOString();
  const prefix = type === 'error' ? '❌' : type === 'success' ? '✅' : 'ℹ️';
  console.log(`${prefix} [${timestamp}] ${message}`);
}

/**
 * Check if file/directory should be excluded
 */
function shouldExclude(item) {
  return config.excludeFromBuild.some(pattern => {
    if (pattern.includes('*')) {
      const regex = new RegExp(pattern.replace(/\*/g, '.*'));
      return regex.test(item);
    }
    return item === pattern;
  });
}

/**
 * Copy directory recursively
 */
function copyDirectory(src, dest) {
  if (!fs.existsSync(src)) {
    log(`Source directory does not exist: ${src}`, 'error');
    return false;
  }

  if (!fs.existsSync(dest)) {
    fs.mkdirSync(dest, { recursive: true });
  }

  const items = fs.readdirSync(src);
  
  for (const item of items) {
    if (shouldExclude(item)) {
      log(`Excluding: ${item}`);
      continue;
    }

    const srcPath = path.join(src, item);
    const destPath = path.join(dest, item);
    const stat = fs.statSync(srcPath);

    if (stat.isDirectory()) {
      copyDirectory(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
      log(`Copied: ${item}`);
    }
  }

  return true;
}

/**
 * Build CSS and JS assets
 */
function buildAssets() {
  log('Building CSS and JS assets...');
  
  try {
    // Build Tailwind CSS
    execSync('npx tailwindcss -i ./assets/css/src/tailwind.css -o ./assets/css/tailwind.css --minify', { stdio: 'inherit' });
    log('CSS built successfully', 'success');
    
    // Build JavaScript
    execSync('npx webpack --mode=production', { stdio: 'inherit' });
    log('JavaScript built successfully', 'success');
    
    return true;
  } catch (error) {
    log(`Asset build failed: ${error.message}`, 'error');
    return false;
  }
}

/**
 * Copy theme files to build directory
 */
function copyThemeFiles() {
  log('Copying theme files to build directory...');
  
  // Clean build directory
  if (fs.existsSync(config.buildDir)) {
    fs.rmSync(config.buildDir, { recursive: true, force: true });
  }
  
  // Copy all theme files
  if (copyDirectory('.', config.buildDir)) {
    log('Theme files copied successfully', 'success');
    return true;
  } else {
    log('Failed to copy theme files', 'error');
    return false;
  }
}

/**
 * Create zip file
 */
function createZip() {
  log('Creating zip file...');
  
  try {
    const zipName = `${config.themeName}.zip`;
    const zipPath = path.join(config.buildDir, '..', zipName);
    
    // Remove existing zip
    if (fs.existsSync(zipPath)) {
      fs.unlinkSync(zipPath);
    }
    
    // Create zip
    execSync(`cd ${config.buildDir} && zip -r ../${zipName} . -x "*.DS_Store" "*.log"`, { stdio: 'inherit' });
    
    log(`Zip file created: ${zipPath}`, 'success');
    return true;
  } catch (error) {
    log(`Zip creation failed: ${error.message}`, 'error');
    return false;
  }
}

/**
 * Copy to Local by Flywheel
 */
function copyToLocal() {
  log('Copying theme to Local by Flywheel...');
  
  try {
    // Check if Local path exists
    if (!fs.existsSync(path.dirname(config.localPath))) {
      log(`Local path does not exist: ${config.localPath}`, 'error');
      return false;
    }
    
    // Remove existing theme
    if (fs.existsSync(config.localPath)) {
      fs.rmSync(config.localPath, { recursive: true, force: true });
    }
    
    // Copy theme
    copyDirectory(config.buildDir, config.localPath);
    
    log(`Theme copied to Local: ${config.localPath}`, 'success');
    return true;
  } catch (error) {
    log(`Local copy failed: ${error.message}`, 'error');
    return false;
  }
}

/**
 * Main build function
 */
function build(options = {}) {
  log('Starting Maju theme build process...');
  
  const steps = [
    { name: 'Build Assets', fn: buildAssets },
    { name: 'Copy Theme Files', fn: copyThemeFiles },
    { name: 'Create Zip', fn: createZip }
  ];
  
  if (options.local) {
    steps.push({ name: 'Copy to Local', fn: copyToLocal });
  }
  
  let success = true;
  
  for (const step of steps) {
    log(`Executing: ${step.name}`);
    if (!step.fn()) {
      success = false;
      break;
    }
  }
  
  if (success) {
    log('Build completed successfully!', 'success');
    log(`Build directory: ${path.resolve(config.buildDir)}`);
    log(`Zip file: ${path.resolve(config.buildDir, '..', `${config.themeName}.zip`)}`);
    if (options.local) {
      log(`Local path: ${config.localPath}`);
    }
  } else {
    log('Build failed!', 'error');
    process.exit(1);
  }
}

// Parse command line arguments
const args = process.argv.slice(2);
const options = {
  local: args.includes('--local') || args.includes('-l')
};

// Run build
build(options);
