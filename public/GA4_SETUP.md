# Google Analytics 4 setup for the admin dashboard

These steps keep the tech bits minimal. You only do this once, then charts show up automatically on `/admin`.

## 1) Create a GA4 property (skip if you already have one)
1. Go to https://analytics.google.com and create a new GA4 property for survailpro.ca.
2. Create a web data stream and copy the **Measurement ID** (looks like `G-XXXXXXX`).

## 2) Add the GA tag to the public site
1. In Google Analytics, go to Admin → Data streams → your web stream.
2. Copy the provided `<script>` snippet.
3. Paste it into `resources/views/layouts/app.blade.php` inside `<head>` (or share it with me to add).
4. Deploy / refresh the site so visits start tracking.

## 3) Create a service account and give it access
1. Visit https://console.cloud.google.com/ and create (or reuse) a project.
2. In “APIs & Services → Credentials”, create a **Service Account**, then add a **JSON key** and download it.
3. In Google Analytics Admin → Property Access Management, add the service account email with **Viewer** (or Analyst) role.

## 4) Place the key file on the server
1. Save the downloaded JSON to `storage/app/ga-service-account.json` on the server (do **not** commit it to git).
2. Ensure it’s readable by the app (web server/PHP user).

## 5) Set the environment variables
Edit `.env` and add:
```
GA4_PROPERTY_ID=YOUR_PROPERTY_ID      # numeric GA4 property ID (not the G- tag)
GA4_CREDENTIALS_PATH=storage/app/ga-service-account.json
# or paste the JSON directly:
# GA4_SERVICE_ACCOUNT_JSON='{"type":"service_account",...}'
```

## 6) Visit `/admin`
Once the env vars are set and the key is in place, log in to `/admin` and the charts will load automatically (last 14 days: unique visitors, sessions, page views, and top pages). If you see an error banner, double-check the property ID and permissions.

Need help? Share the property ID and the service account JSON (securely) and I’ll wire it up for you. 
