#!/bin/bash

# Maju WordPress Theme Installation Script
# This script installs the theme to Local by Flywheel

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Configuration
THEME_NAME="maju"
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

# Check if Local path exists
check_local_path() {
    if [ ! -d "$(dirname "$LOCAL_PATH")" ]; then
        error "Local path does not exist: $(dirname "$LOCAL_PATH")"
        error "Please make sure Local by Flywheel is installed and the 'inscub' site exists."
        exit 1
    fi
    success "Local path found: $(dirname "$LOCAL_PATH")"
}

# Build theme if needed
build_theme() {
    if [ ! -d "build" ]; then
        log "Build directory not found. Building theme..."
        ./scripts/build.sh
    else
        log "Build directory found. Skipping build."
    fi
}

# Install theme to Local
install_theme() {
    log "Installing theme to Local by Flywheel..."
    
    # Remove existing theme
    if [ -d "$LOCAL_PATH" ]; then
        log "Removing existing theme from Local..."
        rm -rf "$LOCAL_PATH"
    fi
    
    # Copy theme
    cp -r "build" "$LOCAL_PATH"
    
    success "Theme installed to Local: $LOCAL_PATH"
}

# Main installation function
main() {
    log "Starting Maju theme installation to Local by Flywheel..."
    
    # Check prerequisites
    check_local_path
    
    # Build theme if needed
    build_theme
    
    # Install theme
    install_theme
    
    success "Installation completed successfully!"
    log "Theme installed at: $LOCAL_PATH"
    log "You can now activate the theme in WordPress admin."
}

# Show usage if help requested
if [[ "$1" == "--help" || "$1" == "-h" ]]; then
    echo "Usage: $0 [OPTIONS]"
    echo ""
    echo "This script installs the Maju theme to Local by Flywheel."
    echo ""
    echo "Options:"
    echo "  --help, -h     Show this help message"
    echo ""
    echo "Prerequisites:"
    echo "  - Local by Flywheel installed"
    echo "  - 'inscub' site created in Local"
    echo "  - Theme built (will build automatically if needed)"
    exit 0
fi

# Run main function
main "$@"
