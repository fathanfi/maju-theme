# Build Scripts

This directory contains build and installation scripts for the Maju WordPress theme.

## Scripts

### `build.js`
Node.js build script that:
- Builds CSS and JS assets
- Copies clean theme files to `build/` directory
- Creates a zip file for WordPress upload
- Optionally copies to Local by Flywheel

**Usage:**
```bash
# Build theme and create zip
node scripts/build.js

# Build theme, create zip, and copy to Local
node scripts/build.js --local
```

### `build.sh`
Shell script version of the build process with the same functionality.

**Usage:**
```bash
# Build theme and create zip
./scripts/build.sh

# Build theme, create zip, and copy to Local
./scripts/build.sh --local

# Show help
./scripts/build.sh --help
```

### `install.sh`
Installation script that builds the theme (if needed) and installs it to Local by Flywheel.

**Usage:**
```bash
# Install theme to Local by Flywheel
./scripts/install.sh

# Show help
./scripts/install.sh --help
```

## Configuration

### Local by Flywheel Path
The scripts are configured to use the following Local by Flywheel path:
```
/Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju
```

To change this path, edit the `LOCAL_PATH` variable in the scripts.

### Excluded Files
The following files and directories are excluded from the build:
- `node_modules/`
- `.git/`
- `package.json`, `package-lock.json`, `yarn.lock`
- Build configuration files (webpack, tailwind, etc.)
- Development tools (eslint, prettier, etc.)
- IDE files (vscode, idea, etc.)
- Temporary files (*.log, *.tmp, etc.)

## NPM Scripts

The following npm scripts are available:

```bash
# Build theme and create zip
npm run build

# Build theme, create zip, and copy to Local
npm run build:local

# Build using shell script
npm run build:sh

# Build and copy to Local using shell script
npm run build:local:sh

# Install to Local by Flywheel
npm run install:local

# Clean build directory and zip file
npm run clean
```

## Requirements

- Node.js (v16 or higher)
- npm
- Local by Flywheel (for local installation)
- `inscub` site created in Local by Flywheel

## Troubleshooting

### Local Path Not Found
If you get an error about the Local path not existing:
1. Make sure Local by Flywheel is installed
2. Create a site named `inscub` in Local
3. Update the `LOCAL_PATH` variable in the scripts if your setup is different

### Permission Denied
If you get permission errors:
```bash
chmod +x scripts/*.sh
```

### Build Fails
If the build fails:
1. Make sure all dependencies are installed: `npm install`
2. Check that Node.js and npm are properly installed
3. Verify the build directory is writable

## Output

### Build Directory
The build process creates a clean theme in the `build/` directory with:
- All theme files (PHP, CSS, JS, images)
- Compiled assets (Tailwind CSS, bundled JavaScript)
- No development files or dependencies

### Zip File
A `maju.zip` file is created in the project root, ready for WordPress upload.

### Local Installation
The theme is copied to Local by Flywheel at:
```
/Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju
```
