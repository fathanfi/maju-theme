# Maju WordPress Theme

A modern, responsive WordPress theme for creative and digital agencies with AI-powered features.

## Features

- **Modern Design**: Clean, contemporary design with neon accents and dark theme
- **Responsive**: Fully responsive design that works on all devices
- **Accessibility**: WCAG 2.1 AA compliant with proper semantic HTML and ARIA labels
- **Performance**: Optimized for speed with lazy loading and efficient code
- **WordPress Standards**: Follows WordPress Coding Standards (WPCS)
- **Security**: Proper sanitization, validation, and permission checks
- **Tailwind CSS**: Built with Tailwind CSS for rapid development
- **Alpine.js**: Lightweight JavaScript framework for interactivity

## Installation

1. Download or clone this theme to your WordPress themes directory
2. Activate the theme in WordPress admin
3. Install dependencies and build assets:

```bash
npm install
npm run build
```

## Development

### Prerequisites

- Node.js (v16 or higher)
- npm or yarn
- WordPress development environment

### Setup

1. Clone the repository
2. Install dependencies:

```bash
npm install
```

3. Start development mode:

```bash
npm run dev
```

This will:
- Watch for CSS changes and rebuild Tailwind CSS
- Watch for JavaScript changes and rebuild with webpack
- Enable source maps for debugging

### Build for Production

```bash
npm run build
```

### Code Quality

The theme includes several tools for maintaining code quality:

- **ESLint**: JavaScript linting
- **Stylelint**: CSS linting
- **Prettier**: Code formatting

Run linting:

```bash
npm run lint:js
npm run lint:css
```

Format code:

```bash
npm run format
```

## Theme Structure

```
maju/
├── assets/
│   ├── css/
│   │   ├── src/
│   │   │   └── tailwind.css
│   │   └── tailwind.css (built)
│   ├── js/
│   │   ├── src/
│   │   │   └── main.js
│   │   └── main.js (built)
│   └── images/
├── style.css
├── functions.php
├── index.php
├── header.php
├── footer.php
├── front-page.php
├── page.php
├── single.php
├── 404.php
├── search.php
├── searchform.php
├── sidebar.php
├── comments.php
└── package.json
```

## Customization

### Colors

The theme uses a custom color palette defined in `tailwind.config.js`:

- **Primary**: Green tones (#00ff88)
- **Secondary**: Pink tones (#ff0080)
- **Accent**: Blue tones (#0080ff)
- **Neon**: Bright accent colors
- **Dark**: Dark theme colors

### Typography

The theme uses Inter font family for modern, readable typography.

### Components

Key components include:

- **Header**: Fixed header with navigation and actions
- **Hero Section**: Full-screen hero with background image
- **About Section**: Feature cards and content
- **Services Section**: Service cards with icons
- **CTA Section**: Call-to-action with gradient background

## WordPress Integration

### Menus

The theme supports two menu locations:

- **Primary Menu**: Main navigation
- **Footer Menu**: Footer navigation

### Widget Areas

- **Sidebar**: Main sidebar widget area

### Theme Support

- Post thumbnails
- Custom logo
- HTML5 markup
- Responsive embeds
- Block editor styles
- Wide alignment

## Security Features

- Proper sanitization of all inputs
- Validation of user data
- Permission checks for sensitive operations
- Nonce verification for AJAX requests
- Escaped output for all dynamic content

## Performance Optimizations

- Lazy loading for images
- Optimized database queries
- Minified CSS and JavaScript
- Efficient asset loading
- Debounced scroll events
- Throttled resize events

## Accessibility Features

- Semantic HTML structure
- ARIA labels and roles
- Keyboard navigation support
- Focus management
- Screen reader compatibility
- Skip links
- High contrast support

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Internet Explorer 11+

## License

This theme is licensed under the GPL v2 or later.

## Support

For support and questions, please contact the development team.

## Changelog

### 1.0.0
- Initial release
- WordPress theme structure
- Tailwind CSS integration
- Alpine.js integration
- Responsive design
- Accessibility features
- Security implementations
- Performance optimizations