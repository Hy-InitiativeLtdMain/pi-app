# 🧾 Installing gRPC PHP Extension on Ubuntu 22.10 for Laravel + Firebase Storage

This document details the step-by-step process used to install the `grpc` extension for PHP on **Ubuntu 22.10 (Kinetic Kudu)** for use in a Laravel application integrating Firebase Storage.

---

## ⚙️ System Context
- **OS:** Ubuntu 22.10
- **PHP Version:** 8.1
- **Use Case:** Laravel app that uploads files (profile pictures, CVs, and other user data) to **Firebase Storage**, using `kreait/firebase-php`.

---

## 🪓 Installation Steps (with Detours)

### 1. Update & Upgrade Your Server
```bash
sudo apt update && sudo apt upgrade -y
```

---

### 2. Install PHP Development Tools
```bash
sudo apt install php-dev php-pear -y
```

> 📝 Note: Other tools like `build-essential`, `unzip`, `libtool`, `autoconf`, etc. were **not required in this case**.

---

### 3. Install zlib (required for gRPC build)
```bash
sudo apt-get install zlib1g-dev -y
```

---

### 4. Install gRPC via PECL
```bash
sudo pecl install grpc
```

> ⚠️ Heads-up: This took over **an hour** on the production server — compilation is heavy. Be patient.

---

## 🧹 Post-Installation Cleanup

After successful installation, the following warning appeared:
```bash
PHP Warning:  Module "grpc" is already loaded in Unknown on line 0
```

This means the `grpc.so` extension was being loaded **twice**.

### Fix: Remove Duplicate Extension Loading

Find all the places it's being loaded:
```bash
grep -r "grpc.so" /etc/php
```

Example output:
```
/etc/php/8.1/cli/php.ini:extension=grpc.so
/etc/php/8.1/cli/conf.d/20-grpc.ini:extension=grpc.so
/etc/php/8.1/fpm/conf.d/20-grpc.ini:extension=grpc.so
```

- Open `/etc/php/8.1/cli/php.ini`:
  ```bash
  sudo nano /etc/php/8.1/cli/php.ini
  ```
- Comment out the line:
  ```ini
  ; extension=grpc.so
  ```

---

### Restart PHP-FPM
```bash
sudo systemctl restart php8.1-fpm
```

---

## ✅ Verification

Check that `grpc` is now loaded **without warnings**:
```bash
php -m | grep grpc
```

Expected output:
```
grpc
```

---

## 📦 Next Steps:
- ✅ Use `kreait/firebase-php` in Laravel
- ✅ Firebase Storage will use gRPC if available
- 🔧 Build a Laravel Firebase File Upload Service

---

## 🏁 Summary (Command Log Style)
```bash
# Update & upgrade system
sudo apt update && sudo apt upgrade -y

# Install PHP dev dependencies
sudo apt install php-dev php-pear -y

# Fix build error by installing zlib
sudo apt-get install zlib1g-dev -y

# Install gRPC (takes a long time!)
sudo pecl install grpc

# Fix duplicate extension loading
sudo nano /etc/php/8.1/cli/php.ini  # comment out extension=grpc.so

# Restart PHP-FPM
sudo systemctl restart php8.1-fpm

# Verify
php -m | grep grpc
```

---

## 👑 Final Thought

With this doc, should future you (or a teammate) descend again into the abyss of PHP extensions, thou shalt not wander blindly. This is your **gRPC Install Grimoire**.
