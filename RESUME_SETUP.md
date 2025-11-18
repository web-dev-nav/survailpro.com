# Resume Storage Setup Instructions

## What Changed?

Resumes are now stored in **public storage** for direct browser viewing without signatures.

### Before:
- ❌ Signed URLs with signatures
- ❌ Private storage with 404 errors
- ❌ Files not accessible

### After:
- ✅ Direct URLs (e.g., `https://survailpro.ca/storage/resumes/filename.docx`)
- ✅ Public storage - viewable in browser
- ✅ No signatures needed

---

## Setup on Your Hostinger Server

### 1. Create Storage Symlink

SSH into your server and run:

```bash
cd /home/u862070716/domains/survailpro.ca/public_html
php artisan storage:link
```

This creates a symlink: `public/storage` → `storage/app/public`

### 2. Create Resumes Directory

```bash
mkdir -p storage/app/public/resumes
chmod -R 775 storage/app/public/resumes
chown -R u862070716:u862070716 storage/app/public/resumes
```

### 3. Verify Setup

After running the commands, check:

```bash
ls -la public/storage  # Should show symlink to ../storage/app/public
ls -la storage/app/public/resumes  # Should exist
```

### 4. Upload Your Code

Upload these updated files to your server:
- `app/Http/Controllers/ApplicationController.php`
- `app/Mail/ApplicationSubmitted.php`
- `resources/views/emails/application-submitted.blade.php`
- `routes/web.php`
- `.env` (with APP_URL=https://survailpro.ca)

### 5. Clear Cache

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

---

## How It Works Now

When someone uploads a resume:

1. **File saved to:** `storage/app/public/resumes/randomstring.docx`
2. **Accessible via:** `https://survailpro.ca/storage/resumes/randomstring.docx`
3. **Email contains:** Direct clickable link (no signature!)
4. **HR can:** Click link to view/download in browser

---

## Testing

1. Submit a test application at https://survailpro.ca/application
2. Upload a resume
3. Check email at hr@survailpro.ca
4. Click the resume link - should open directly in browser!

---

## Security Notes

- ✅ Files have random 40-character names (impossible to guess)
- ✅ Still validates PDF/Word only
- ✅ Still scans for malicious content
- ✅ Public but obscured (no directory listing)
- ✅ Can be deleted manually if needed

---

## Troubleshooting

### "404 Not Found" when clicking resume link

**Check symlink exists:**
```bash
ls -la /home/u862070716/domains/survailpro.ca/public_html/public/storage
```

If not found, run:
```bash
php artisan storage:link
```

### Resume file not being saved

**Check directory permissions:**
```bash
chmod -R 775 storage/app/public/resumes
chown -R u862070716:u862070716 storage/app/public
```

### Resume link shows broken

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

## Directory Structure

```
public_html/
├── public/
│   └── storage/  ← SYMLINK to ../storage/app/public
├── storage/
│   └── app/
│       └── public/
│           └── resumes/  ← Resume files stored here
│               ├── abc123...xyz.pdf
│               ├── def456...uvw.docx
│               └── .gitignore
```

Accessible as: `https://survailpro.ca/storage/resumes/abc123...xyz.pdf`
