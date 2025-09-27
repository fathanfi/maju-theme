#!/usr/bin/env node

const { execSync } = require('child_process');
const fs = require('fs');
const path = require('path');

console.log('🧹 Cleaning and rebuilding theme...');

try {
  // Clean build directory
  console.log('📁 Cleaning build directory...');
  if (fs.existsSync('build/')) {
    fs.rmSync('build/', { recursive: true, force: true });
  }

  // Run grunt build
  console.log('🔨 Running Grunt build...');
  execSync('npx grunt build', { stdio: 'inherit' });

  // Remove any src directories that might have been copied
  console.log('🗑️  Removing source directories from build...');
  const srcDirs = [
    'build/assets/css/src',
    'build/assets/js/src'
  ];
  
  srcDirs.forEach(dir => {
    if (fs.existsSync(dir)) {
      fs.rmSync(dir, { recursive: true, force: true });
    }
  });

  // Copy to Local by Flywheel
  console.log('📋 Copying to Local by Flywheel...');
  execSync('npx grunt copy:local', { stdio: 'inherit' });

  console.log('✅ Build complete! Files copied to Local by Flywheel.');
  console.log('📍 Local site: /Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju');

} catch (error) {
  console.error('❌ Build failed:', error.message);
  process.exit(1);
}
