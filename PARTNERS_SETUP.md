# Our Partners Section - Setup Guide

## ✅ What Was Created

I've added a professional "Our Trusted Partners" section to your homepage with a responsive logo slider.

### Files Modified:
1. ✅ `resources/views/home.blade.php` - Added partners section with slider

### Files Created:
2. ✅ `public/assets/images/partners/` - Directory for partner logos
3. ✅ `public/assets/images/partners/README.md` - Detailed instructions
4. ✅ `public/assets/images/partners/.htaccess` - Security (prevents directory listing)

---

## 🎨 Features

### Responsive Slider:
- **Desktop (1024px+):** Shows 4 partner logos at once
- **Tablet (768px-1023px):** Shows 3 partner logos at once
- **Mobile Large (640px-767px):** Shows 2 partner logos at once
- **Mobile Small (<640px):** Shows 1 partner logo at once

### Interactive Elements:
- ✅ Left/Right navigation arrows
- ✅ Dot indicators (clickable)
- ✅ Auto-play (slides every 4 seconds)
- ✅ Pauses on hover
- ✅ Smooth transitions
- ✅ Grayscale → Color on hover
- ✅ Clickable logos (links to partner websites)

---

## 📸 How to Add Partner Logos

### Step 1: Prepare Logo Images

**Logo Requirements:**
- **Format:** PNG (with transparent background) or JPG
- **Size:** 400px × 200px (width × height) recommended
- **File Size:** Maximum 200KB per image
- **Naming:** `partner-1.png`, `partner-2.png`, `partner-3.png`, etc.

### Step 2: Upload Logo Files

Upload your logo files to:
```
public/assets/images/partners/
```

**Example:**
```
public/assets/images/partners/
├── partner-1.png  (Google logo)
├── partner-2.png  (Microsoft logo)
├── partner-3.png  (IBM logo)
├── partner-4.png  (Amazon logo)
├── partner-5.png  (Apple logo)
├── partner-6.png  (Tesla logo)
```

### Step 3: Update Partner Links

Edit `resources/views/home.blade.php` (around line 280-320):

**Change this:**
```html
<a href="#" target="_blank" class="block bg-white...">
```

**To this:**
```html
<a href="https://www.partner-website.com" target="_blank" class="block bg-white...">
```

### Step 4: Update Partner Names

Update the `alt` attribute for each logo:

```html
<img src="{{ asset('assets/images/partners/partner-1.png') }}"
     alt="Google Partner"  <!-- Change this to actual partner name -->
     class="h-20 w-auto mx-auto object-contain grayscale hover:grayscale-0 transition-all duration-300">
```

---

## ➕ Adding More Partners (More than 6)

To add partner 7, 8, 9, etc.:

### 1. Add Logo File:
Upload `partner-7.png` to `public/assets/images/partners/`

### 2. Add HTML Code:

Open `resources/views/home.blade.php` and find the partners section. After Partner 6, add:

```html
<!-- Partner 7 -->
<div class="partner-slide flex-shrink-0">
    <a href="https://partner7-website.com" target="_blank" class="block bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <img src="{{ asset('assets/images/partners/partner-7.png') }}"
             alt="Partner 7 Name"
             class="h-20 w-auto mx-auto object-contain grayscale hover:grayscale-0 transition-all duration-300">
    </a>
</div>
```

**The slider automatically adjusts!** No JavaScript changes needed.

---

## 🗑️ Removing Partners

To remove a partner:

1. Delete the logo file from `public/assets/images/partners/`
2. Remove the corresponding `<div class="partner-slide">` block from `home.blade.php`

---

## 🎯 Customization Options

### Change Logo Size:

Edit the `h-20` class in the `<img>` tag:
- `h-16` = Smaller (64px)
- `h-20` = Default (80px)
- `h-24` = Larger (96px)
- `h-32` = Extra Large (128px)

```html
<img src="..." alt="..." class="h-24 w-auto mx-auto...">
```

### Change Auto-Play Speed:

In the `<script>` section (around line 463), change:
```javascript
let autoplayInterval = setInterval(nextSlide, 4000); // 4000 = 4 seconds
```

To:
```javascript
let autoplayInterval = setInterval(nextSlide, 3000); // 3 seconds
// or
let autoplayInterval = setInterval(nextSlide, 5000); // 5 seconds
```

### Disable Auto-Play:

Comment out or remove this line (around line 463):
```javascript
// let autoplayInterval = setInterval(nextSlide, 4000);
```

### Change Section Title:

Edit line 269:
```html
<h3 class="text-3xl lg:text-5xl font-bold text-survail-brown mb-4">Our Trusted Partners</h3>
```

Change to:
- "Our Clients"
- "Companies We Work With"
- "Trusted Organizations"
- etc.

### Change Section Description:

Edit line 270-272:
```html
<p class="text-xl text-gray-600 max-w-3xl mx-auto">
    We collaborate with leading organizations to deliver exceptional security solutions
</p>
```

---

## 🖼️ Creating Placeholder Logos

If you don't have actual partner logos yet, you can use placeholder images:

### Option 1: Online Placeholder Services

Use a service like **placeholder.com**:
```
https://via.placeholder.com/400x200/0026c0/FFFFFF?text=Partner+Name
```

### Option 2: Text-Based Temporary Placeholders

Replace the `<img>` tag with text temporarily:

```html
<div class="h-20 flex items-center justify-center">
    <span class="text-xl font-bold text-gray-400">Partner Name</span>
</div>
```

### Option 3: Use Canva or Photoshop

1. Create a 400×200px canvas
2. Add partner name text
3. Export as PNG
4. Upload to `public/assets/images/partners/`

---

## 📋 Complete Example

Here's a complete example of adding "Google" as a partner:

### 1. Save Google Logo:
- Download Google logo (PNG with transparent background)
- Resize to 400×200px
- Save as `public/assets/images/partners/google.png`

### 2. Update HTML:

```html
<!-- Google Partner -->
<div class="partner-slide flex-shrink-0">
    <a href="https://www.google.com" target="_blank" class="block bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <img src="{{ asset('assets/images/partners/google.png') }}"
             alt="Google Partner"
             class="h-20 w-auto mx-auto object-contain grayscale hover:grayscale-0 transition-all duration-300">
    </a>
</div>
```

### 3. Test:
- Visit homepage: `https://survailpro.ca`
- Scroll to "Our Trusted Partners" section
- Click arrows or dots to navigate
- Hover over logo to see it in color
- Click logo to visit Google's website

---

## 🔧 Troubleshooting

### Logos Not Showing?
1. Check file names match exactly (case-sensitive!)
2. Verify files are in correct directory
3. Clear browser cache (Ctrl+F5 or Cmd+R)
4. Check file permissions (should be 644)

### Slider Not Moving?
1. Open browser console (F12)
2. Check for JavaScript errors
3. Ensure all slides have `partner-slide` class
4. Verify IDs are unique (`partnersSlider`, `partnersPrev`, `partnersNext`)

### Logos Too Large/Small?
- Adjust `h-20` class to `h-16` (smaller) or `h-24` (larger)

### Grayscale Not Working?
- Ensure you have the `grayscale hover:grayscale-0` classes on the `<img>` tag

---

## 📊 Section Location

The "Our Trusted Partners" section appears:
- **After:** Service coverage areas
- **Before:** Call to Action section
- **Position:** Near the bottom of the homepage

---

## 🚀 Going Live

1. **Upload logo files** to server:
   ```bash
   scp -r public/assets/images/partners/* user@server:/path/to/public/assets/images/partners/
   ```

2. **Upload updated home.blade.php**:
   ```bash
   scp resources/views/home.blade.php user@server:/path/to/resources/views/
   ```

3. **Clear Laravel cache**:
   ```bash
   php artisan view:clear
   php artisan cache:clear
   ```

4. **Test on production**:
   Visit https://survailpro.ca and scroll to partners section

---

## 📞 Support

For detailed instructions, see:
- `public/assets/images/partners/README.md`

For questions or issues, contact your developer.

---

## ✨ Tips for Best Results

1. **Use high-quality logos** - At least 400px wide
2. **Transparent backgrounds** - PNG format works best
3. **Consistent style** - All logos should be similar in style
4. **Test on mobile** - Check how it looks on different devices
5. **Keep it clean** - 6-8 partners is ideal, avoid overcrowding
6. **Update regularly** - Keep partner list current
7. **Get permission** - Ensure you have rights to use partner logos
