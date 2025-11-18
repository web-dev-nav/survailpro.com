# Partner Logos - Instructions

## 📁 Directory Structure

This directory contains partner company logos displayed in the "Our Trusted Partners" section on the homepage.

```
partners/
├── partner-1.png
├── partner-2.png
├── partner-3.png
├── partner-4.png
├── partner-5.png
├── partner-6.png
└── README.md
```

---

## 📸 Logo Requirements

### Image Specifications:
- **Format:** PNG (with transparent background preferred) or JPG
- **Recommended Size:** 400px × 200px (width × height)
- **Max File Size:** 200KB per image
- **Aspect Ratio:** Landscape (2:1 ratio works best)
- **Background:** Transparent PNG recommended for best results

### Logo Guidelines:
- ✅ High resolution logos
- ✅ Company logo only (no text/taglines if possible)
- ✅ Centered and properly cropped
- ✅ Consistent style (all horizontal or all square)

---

## 🎨 How to Add Partner Logos

### Step 1: Prepare Your Logo Files

1. Name your logo files as:
   - `partner-1.png`
   - `partner-2.png`
   - `partner-3.png`
   - etc.

2. Ensure images are:
   - High quality
   - Properly sized (400px wide recommended)
   - Transparent background (PNG format)

### Step 2: Upload to This Directory

Upload your logo files to:
```
public/assets/images/partners/
```

### Step 3: Update Links (Optional)

If you want the logos to be clickable and link to partner websites:

1. Open: `resources/views/home.blade.php`
2. Find the partner section (around line 280-320)
3. Update the `href="#"` attribute with the partner's website URL:

```html
<!-- Before -->
<a href="#" target="_blank" class="block bg-white...">

<!-- After -->
<a href="https://www.partner-website.com" target="_blank" class="block bg-white...">
```

### Step 4: Update Partner Name/Alt Text

Update the `alt` attribute for accessibility:

```html
<img src="{{ asset('assets/images/partners/partner-1.png') }}"
     alt="Company Name"
     class="h-20 w-auto mx-auto object-contain grayscale hover:grayscale-0 transition-all duration-300">
```

---

## ➕ Adding More Partners

To add more than 6 partners:

1. Add more logo files: `partner-7.png`, `partner-8.png`, etc.

2. Add more slides in `home.blade.php`:

```html
<!-- Partner 7 -->
<div class="partner-slide flex-shrink-0">
    <a href="https://partner7-website.com" target="_blank" class="block bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <img src="{{ asset('assets/images/partners/partner-7.png') }}" alt="Partner 7 Name" class="h-20 w-auto mx-auto object-contain grayscale hover:grayscale-0 transition-all duration-300">
    </a>
</div>
```

The slider will automatically adjust!

---

## 🗑️ Removing Partners

To remove a partner:

1. Delete the logo file from this directory
2. Remove the corresponding HTML block from `home.blade.php`

---

## 🎯 Slider Features

The partner slider includes:

✅ **Responsive Design:**
- Desktop (1024px+): Shows 4 logos at once
- Tablet (768px-1023px): Shows 3 logos at once
- Mobile Large (640px-767px): Shows 2 logos at once
- Mobile Small (<640px): Shows 1 logo at once

✅ **Interactive Elements:**
- Left/Right arrow navigation
- Dot indicators for manual navigation
- Auto-play (changes every 4 seconds)
- Pauses on hover

✅ **Visual Effects:**
- Grayscale by default
- Full color on hover
- Smooth transitions
- Shadow effects
- Lift animation on hover

---

## 🖼️ Creating Placeholder Logos

If you don't have logos yet, you can create simple placeholder images:

### Using Online Tools:
1. **Placeholder.com:** https://placeholder.com/
   - URL: `https://via.placeholder.com/400x200/0026c0/FFFFFF?text=Partner+Logo`

2. **Canva.com:** Create custom 400×200px graphics

3. **Photoshop/GIMP:** Design custom placeholders

### Temporary Placeholder Code:
You can use this HTML to show text placeholders until you get actual logos:

```html
<div class="h-20 flex items-center justify-center">
    <span class="text-2xl font-bold text-gray-400">Partner Name</span>
</div>
```

---

## 📝 Example Partner Entry

Here's a complete example of how to add a partner:

```html
<!-- Microsoft Partner -->
<div class="partner-slide flex-shrink-0">
    <a href="https://www.microsoft.com" target="_blank" class="block bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
        <img src="{{ asset('assets/images/partners/microsoft.png') }}"
             alt="Microsoft Partner"
             class="h-20 w-auto mx-auto object-contain grayscale hover:grayscale-0 transition-all duration-300">
    </a>
</div>
```

---

## 🔧 Troubleshooting

### Logo Not Showing?
- Check file name matches exactly (case-sensitive)
- Verify file is in correct directory
- Clear browser cache (Ctrl+F5)

### Logo Too Large/Small?
- Adjust the `h-20` class in the `<img>` tag
- h-16 = smaller, h-24 = larger

### Logo Not Clickable?
- Ensure `href` is not empty or "#"
- Add `target="_blank"` to open in new tab

### Slider Not Working?
- Check browser console for JavaScript errors
- Ensure all partner slides have the `partner-slide` class

---

## 📞 Need Help?

If you need assistance adding or modifying partner logos, contact your developer.
