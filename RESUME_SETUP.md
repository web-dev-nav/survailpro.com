# Resume Storage Setup Instructions

## What Changed?

Resumes are now stored **directly in the public directory** - NO SYMLINK NEEDED!

### Before:
- ❌ Signed URLs with signatures
- ❌ Required storage symlink
- ❌ Files in storage/app/public (not accessible)
- ❌ 404 errors

### After:
- ✅ Direct URLs (e.g., `https://survailpro.ca/resumes/filename.docx`)
- ✅ Files stored in `public/resumes/` directory
- ✅ **NO SYMLINK REQUIRED**
- ✅ Works immediately after upload

---

## Setup on Your Hostinger Server

### 1. Create Resumes Directory (if it doesn't exist)

SSH into your server and run:

```bash
cd /home/u364625631/domains/survailprotection.com/public_html
mkdir -p public/resumes
chmod 755 public/resumes
```

### 2. Upload Files

Upload these updated files to your server:
- `app/Http/Controllers/ApplicationController.php`
- `app/Mail/ApplicationSubmitted.php`
- `public/resumes/.htaccess` (prevents directory listing)
- `public/resumes/.gitignore` (excludes resume files from git)

### 3. Clear Cache

```bash
php artisan config:clear
php artisan cache:clear
```

---

## Directory Structure

```
public_html/
├── public/
│   └── resumes/  ← Resume files stored HERE
│       ├── .htaccess (prevents directory listing)
│       ├── .gitignore
│       ├── abc123...xyz.pdf
│       └── def456...uvw.docx
```

Accessible as: `https://survailpro.ca/resumes/abc123...xyz.pdf`

---

## How It Works Now

When someone uploads a resume:

1. **File saved to:** `public/resumes/randomstring.docx`
2. **Accessible via:** `https://survailpro.ca/resumes/randomstring.docx`
3. **Email contains:** Direct clickable link
4. **HR can:** Click link to view/download in browser

---

## Security Features

- ✅ Random 40-character filenames (impossible to guess)
- ✅ Directory listing disabled (via .htaccess)
- ✅ Still validates PDF/Word only
- ✅ Still scans for malicious content
- ✅ Public but obscured (random names)

---

## Testing

1. Submit a test application at https://survailpro.ca/application
2. Upload a resume
3. Check email at hr@survailpro.ca
4. Click the resume link - should open directly in browser!

---

## Troubleshooting

### "404 Not Found" when clicking resume link

**Check directory exists:**
```bash
ls -la public/resumes
```

If not found, create it:
```bash
mkdir -p public/resumes
chmod 755 public/resumes
```

### Resume file not being saved

**Check directory permissions:**
```bash
chmod 755 public/resumes
```

### Resume link shows wrong domain

**Check .env APP_URL:**
```bash
grep APP_URL .env
```

Should be: `APP_URL=https://survailpro.ca`

If wrong, update and clear cache:
```bash
php artisan config:clear
```

---

## Advantages of This Approach

✅ **No symlink needed** - Works on all hosting providers
✅ **Simpler setup** - Just create a directory
✅ **Direct access** - Files immediately accessible
✅ **No 404 errors** - No symlink breakage issues
✅ **Easier debugging** - Files visible in public directory

---

## File Cleanup (Optional)

To delete old resume files:

```bash
# Delete files older than 90 days
find public/resumes -name "*.pdf" -mtime +90 -delete
find public/resumes -name "*.docx" -mtime +90 -delete
find public/resumes -name "*.doc" -mtime +90 -delete
```

You can add this as a cron job if needed.
