#!/bin/bash

# Maju WordPress Theme Build Script
# This script builds the theme and optionally copies it to Local by Flywheel

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Configuration
THEME_NAME="maju"
BUILD_DIR="./build"
LOCAL_PATH="/Users/fathanfisabililah/Local Sites/inscub/app/public/wp-content/themes/maju"

# Logging function
log() {
    echo -e "${BLUE}[$(date +'%Y-%m-%d %H:%M:%S')]${NC} $1"
}

success() {
    echo -e "${GREEN}✅ $1${NC}"
}

error() {
    echo -e "${RED}❌ $1${NC}"
}

warning() {
    echo -e "${YELLOW}⚠️  $1${NC}"
}

# Check if Node.js is installed
check_node() {
    if ! command -v node &> /dev/null; then
        error "Node.js is not installed. Please install Node.js first."
        exit 1
    fi
    success "Node.js found: $(node --version)"
}

# Check if npm is installed
check_npm() {
    if ! command -v npm &> /dev/null; then
        error "npm is not installed. Please install npm first."
        exit 1
    fi
    success "npm found: $(npm --version)"
}

# Install dependencies if needed
install_deps() {
    if [ ! -d "node_modules" ]; then
        log "Installing dependencies..."
        npm install
        success "Dependencies installed"
    else
        log "Dependencies already installed"
    fi
}

# Build CSS and JS assets
build_assets() {
    log "Building CSS and JS assets..."
    
    # Build Tailwind CSS
    npx tailwindcss -i ./assets/css/src/tailwind.css -o ./assets/css/tailwind.css --minify
    success "CSS built successfully"
    
    # Build JavaScript
    npx webpack --mode=production
    success "JavaScript built successfully"
}

# Clean build directory
clean_build() {
    if [ -d "$BUILD_DIR" ]; then
        log "Cleaning build directory..."
        rm -rf "$BUILD_DIR"
        success "Build directory cleaned"
    fi
}

# Copy theme files to build directory
copy_theme_files() {
    log "Copying theme files to build directory..."
    
    # Create build directory
    mkdir -p "$BUILD_DIR"
    
    # Copy all files except excluded ones
    rsync -av --exclude='node_modules' \
              --exclude='.git' \
              --exclude='.gitignore' \
              --exclude='package.json' \
              --exclude='package-lock.json' \
              --exclude='yarn.lock' \
              --exclude='webpack.config.js' \
              --exclude='postcss.config.js' \
              --exclude='tailwind.config.js' \
              --exclude='.eslintrc.js' \
              --exclude='.stylelintrc' \
              --exclude='.prettierrc' \
              --exclude='scripts' \
              --exclude='build' \
              --exclude='.DS_Store' \
              --exclude='*.log' \
              --exclude='*.tmp' \
              --exclude='*.temp' \
              --exclude='.vscode' \
              --exclude='.idea' \
              --exclude='*.swp' \
              --exclude='*.swo' \
              ./ "$BUILD_DIR/"
    
    success "Theme files copied to build directory"
}

# Create zip file
create_zip() {
    log "Creating zip file..."
    
    cd "$BUILD_DIR"
    zip -r "../${THEME_NAME}.zip" . -x "*.DS_Store" "*.log" > /dev/null
    cd ..
    
    success "Zip file created: ${THEME_NAME}.zip"
}

# Copy to Local by Flywheel
copy_to_local() {
    log "Copying theme to Local by Flywheel..."
    
    # Check if Local path exists
    if [ ! -d "$(dirname "$LOCAL_PATH")" ]; then
        error "Local path does not exist: $(dirname "$LOCAL_PATH")"
        return 1
    fi
    
    # Remove existing theme
    if [ -d "$LOCAL_PATH" ]; then
        log "Removing existing theme from Local..."
        rm -rf "$LOCAL_PATH"
    fi
    
    # Copy theme
    cp -r "$BUILD_DIR" "$LOCAL_PATH"
    
    success "Theme copied to Local: $LOCAL_PATH"
}

# Main build function
main() {
    log "Starting Maju theme build process..."
    
    # Check prerequisites
    check_node
    check_npm
    
    # Install dependencies
    install_deps
    
    # Build assets
    build_assets
    
    # Clean and copy files
    clean_build
    copy_theme_files
    
    # Create zip
    create_zip
    
    # Copy to Local if requested
    if [[ "$1" == "--local" || "$1" == "-l" ]]; then
        copy_to_local
    fi
    
    success "Build completed successfully!"
    log "Build directory: $(pwd)/$BUILD_DIR"
    log "Zip file: $(pwd)/${THEME_NAME}.zip"
    if [[ "$1" == "--local" || "$1" == "-l" ]]; then
        log "Local path: $LOCAL_PATH"
    fi
}

# Show usage if help requested
if [[ "$1" == "--help" || "$1" == "-h" ]]; then
    echo "Usage: $0 [OPTIONS]"
    echo ""
    echo "Options:"
    echo "  --local, -l    Copy theme to Local by Flywheel after building"
    echo "  --help, -h     Show this help message"
    echo ""
    echo "Examples:"
    echo "  $0              Build theme and create zip file"
    echo "  $0 --local      Build theme, create zip, and copy to Local"
    exit 0
fi

# Run main function
main "$@"
