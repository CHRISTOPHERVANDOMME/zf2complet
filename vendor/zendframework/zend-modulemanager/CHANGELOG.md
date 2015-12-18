# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

<<<<<<< HEAD
## 2.6.1 - 2015-09-22

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Fixed a condition where the `ModuleEvent` target was not properly populated
  with the `ModuleManager` as the target.

## 2.6.0 - 2015-09-22

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#10](https://github.com/zendframework/zend-modulemanager/pull/10) pins the
  zend-stdlib version to `~2.7`, allowing it to use that version forward, and
  ensuring compatibility with consumers of the new zend-hydrator library.

=======
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
## 2.5.3 - 2015-09-22

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Fixed a condition where the `ModuleEvent` target was not properly populated
  with the `ModuleManager` as the target.

## 2.5.2 - 2015-09-22

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- [#9](https://github.com/zendframework/zend-modulemanager/pull/9) pins the
  zend-stdlib version to `>=2.5.0,<2.7.0`, as 2.7.0 deprecates the hydrators (in
  favor of the new zend-hydrator library).
