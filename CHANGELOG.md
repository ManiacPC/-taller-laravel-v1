# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.1.0] - 2019-06-29

### Added
- Initial Laravel project setup with authentication system
- Category (Categoria) management system
  - Create, read, update, and delete operations for categories
  - Category validation with custom form requests
  - Dedicated views for listing, adding, and editing categories
- Post management system
  - Post model with relationships to users and categories
  - Support for attachments (Adjunto model)
  - Many-to-many relationship between posts and categories
- User authentication and authorization
  - Login, registration, and password reset functionality
  - Session verification endpoints
  - Middleware protection for sensitive routes
- Database models and relationships
  - User model with Eloquent relationships
  - Category model with post associations
  - Post model with user, category, and attachment relationships
- Frontend assets
  - FontAwesome 5 integration (all variants: solid, regular, brands)
  - Bootstrap styling with Vue.js components
  - Custom SASS styling configuration
- Project configuration
  - Laravel Mix for asset compilation
  - EditorConfig for consistent coding style
  - Environment configuration examples

### Technical Details
- Laravel 5.8 framework
- Eloquent ORM for database operations
- Blade templating engine
- Form request validation
- RESTful routing structure
- Spanish language support for validation messages

[Unreleased]: https://github.com/username/repository/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/username/repository/releases/tag/v0.1.0
