<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'/>
<title>NEXDROP - Premium Tools</title>

<link href='https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Poppins:wght@400;600;900&display=swap' rel='stylesheet'/>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' rel='stylesheet'/>

<style>
/* আপনার দেওয়া সিএসএস এখানে হুবহু রাখা হয়েছে */
:root {
  --primary-gradient: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
  --accent-color: #6366f1;
  --bg-light: #f8fafc;
  --text-dark: #1e293b;
  --text-muted: #64748b;
}

html, body { overflow-x: hidden; width: 100%; position: relative; margin: 0; padding: 0; background: var(--bg-light); font-family: 'Poppins', sans-serif; }
header { background: var(--primary-gradient); padding: 10px 15px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 1000; box-shadow: 0 4px 15px rgba(99, 102, 241, 0.2); height: 60px; box-sizing: border-box; }
.logo { font-family: 'Poppins', sans-serif; font-size: 24px; font-weight: 900; text-transform: uppercase; color: #ffffff; position: relative; cursor: pointer; letter-spacing: 1px; display: inline-block; user-select: none; line-height: 1; }
.logo::before { content: "NEXDROP"; position: absolute; top: 0; left: 0; width: 100%; height: 100%; color: #22d3ee; overflow: hidden; animation: animateWaveLogo 4s ease-in-out infinite; }
@keyframes animateWaveLogo {
    0%, 100% { clip-path: polygon(0% 45%, 15% 44%, 32% 50%, 54% 60%, 70% 61%, 84% 59%, 100% 52%, 100% 100%, 0% 100%); }
    50% { clip-path: polygon(0% 60%, 16% 65%, 34% 66%, 51% 62%, 67% 50%, 84% 45%, 100% 46%, 100% 100%, 0% 100%); }
}
.search-wrapper { display: flex; align-items: center; position: relative; }
.search-input-box { width: 0; overflow: hidden; transition: 0.4s; }
.search-wrapper.active .search-input-box { width: 150px; margin-right: 5px; }
.search-input { width: 100%; background: transparent; border: none; border-bottom: 2px solid #fff; color: #fff; outline: none; padding: 2px 0; font-size: 13px; }
.search-btn { background: none; border: none; color: #ffffff; font-size: 18px; cursor: pointer; }
#sidebar { position: fixed; left: -280px; top: 0; width: 275px; height: 100%; background: #ffffff; z-index: 2001; transition: 0.4s ease; box-shadow: 5px 0 25px rgba(0,0,0,0.1); overflow-y: auto; }
#sidebar.active { left: 0; }
.sidebar-header { background: var(--primary-gradient); color: white; padding: 25px 20px; font-weight: bold; display: flex; justify-content: space-between; align-items: center; font-size: 18px; }
#sidebar a { display: flex; align-items: center; padding: 14px 20px; color: #334155; text-decoration: none; border-bottom: 1px solid #f1f5f9; font-weight: 500; font-size: 14px; cursor: pointer; transition: 0.3s; gap: 12px; }
.admin-meta { display: flex; align-items: center; gap: 8px; font-size: 12px; color: var(--text-dark); padding: 5px 15px 12px 15px; font-weight: 600; }
.admin-avatar { width: 26px; height: 26px; border-radius: 50%; border: 1.5px solid var(--accent-color); }
.slider-container { width: 95%; max-width: 1100px; margin: 15px auto; overflow: hidden; border-radius: 16px; border: 1px solid #e2e8f0; }
.slides { display: flex; width: 300%; transition: transform 0.8s ease-in-out; }
.slide { width: 33.333%; }
.slide img { width: 100%; height: 190px; object-fit: cover; display: block; }
.main-wrapper { max-width: 1100px; margin: 0 auto; padding: 10px; min-height: 80vh; }
.post-grid { display: grid; grid-template-columns: 1fr; gap: 18px; }
.card { background: #fff; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; transition: 0.3s; cursor: pointer; margin-bottom: 10px; }
.card img { width: 100%; aspect-ratio: 16/9; object-fit: cover; }
.card-title { padding: 12px 15px 5px 15px; font-size: 17px; font-weight: bold; color: var(--text-dark); }
.prompt-box { background: #fff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 18px; }
.prompt-img { width: 100%; border-radius: 12px; margin-bottom: 15px; }
.download-btn { background: var(--accent-color); color: #fff; padding: 15px; border-radius: 12px; text-align: center; text-decoration: none; display: block; font-weight: bold; margin-top: 10px; }
.tg-btn-control { background: #0ea5e9; color: white; padding: 15px; border-radius: 12px; text-align: center; text-decoration: none; display: block; margin-top: 10px; font-weight: bold; }
#site-loader { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #fff; z-index: 10000; display: flex; align-items: center; justify-content: center; opacity: 0; pointer-events: none; transition: 0.25s; }
#site-loader.active { opacity: 1; pointer-events: auto; }
.site-spinner { width: 45px; height: 45px; border: 4px solid #f1f5f9; border-top: 4px solid var(--accent-color); border-radius: 50%; animation: spin 0.8s linear infinite; }
@keyframes spin { to { transform: rotate(360deg); } }
footer { background: #f5f3ff; padding: 30px 20px; text-align: center; margin-top: 40px; color: var(--text-muted); font-size: 13px; }
</style>
</head>
<body oncontextmenu="return false;"> <!-- রাইট ক্লিক বন্ধ -->

<div id='site-loader'><div class='site-spinner'/></div>

<!-- ইন্টারসিশিয়াল অ্যাড -->
<div id='interstitial-ad' style='position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.95); z-index: 9999; display: none; align-items: center; justify-content: center; flex-direction: column;'>
  <div style='position: relative; width: 90%; max-width: 380px; background: #fff; border-radius: 20px; overflow: hidden;'>
    <div onclick='closeAd()' style='position: absolute; top: 12px; right: 12px; background: rgba(0,0,0,0.5); color: #fff; width: 32px; height: 32px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer;'>&times;</div>
    <a href='#' id='ad-link' target='_blank'><img id='ad-image' src='' style='width:100%; display:block; aspect-ratio: 4/5; object-fit: cover;'/></a>
    <div style='padding: 20px;'><button onclick='closeAd()' style='background:var(--accent-color); color:#fff; border:none; padding:12px; border-radius:10px; width: 100%; cursor:pointer;'>Continue to Content</button></div>
  </div>
</div>

<div id='sidebar'>
  <div class='sidebar-header'>NEXDROP MENU <div class='close-btn' onclick='toggleNav()'>&times;</div></div>
  <a onclick='showCategory("all")'><i class='fas fa-home'/> Home</a>
  <a onclick='showCategory("videos")'><i class='fas fa-video'/> Video Templates</a>
  <a onclick='showCategory("apps")'><i class='fas fa-mobile-alt'/> Android Apps</a>
  <a onclick='showCategory("presets")'><i class='fas fa-camera-retro'/> Lightroom Presets</a>
  <a onclick='showCategory("prompts")'><i class='fas fa-robot'/> AI Prompts</a>
  <a onclick='showCategory("coding")'><i class='fas fa-code'/> Developer Coding</a>
  <a id='ytLinkSidebar' target='_blank'><i class='fab fa-youtube'/> YouTube Channel</a>
  <a id='fbLink' target='_blank'><i class='fab fa-facebook'/> Facebook Page</a>
  <a id='tgLinkSidebar' target='_blank'><i class='fab fa-telegram'/> Telegram Group</a>
</div>

<header>
  <div style='display: flex; align-items: center;'>
    <div class='menu-icon' onclick='toggleNav()' style='font-size:24px; color:#fff; margin-right:15px; cursor:pointer;'><i class='fas fa-bars-staggered'/></div>
    <div class='logo' onclick='location.reload()'>NEXDROP</div>
  </div>
  <div class='search-wrapper' id='searchWrapper'>
    <div class='search-input-box'><input class='search-input' id='searchInput' oninput='handleSearch(this.value)' placeholder='Search...' type='text'/></div>
    <button class='search-btn' id='searchBtn'><i class='fa-solid fa-magnifying-glass'/></button>
  </div>
</header>

<div class='slider-container' id='mainSlider'>
  <div class='slides' id='slideTrack'>
    <div class='slide'><img id='slideImg1' src=''/></div>
    <div class='slide'><img id='slideImg2' src=''/></div>
    <div class='slide'><img id='slideImg3' src=''/></div>
  </div>
</div>

<div class='main-wrapper' id='mainWrapper'>
  <div id='detail-view' style="display:none;"></div>
  <div id='firebase-home'></div>
  <div id='firebase-apps' class='post-grid' style='display:none;'></div>
  <div id='firebase-prompts' style='display:none;'></div>
  <div id='firebase-presets' class='post-grid' style='display:none;'></div>
  <div id='firebase-coding' style='display:none;'></div>
  <div id='firebase-videos' class='post-grid' style='display:none;'></div>
</div>

<footer>
  <div style='font-size:18px; font-weight:900; color:var(--accent-color); margin-bottom:8px;'>NEXDROP</div>
  <div>Copyright © 2026 | All Rights Reserved</div>
</footer>

<script>
// ডাটাবেস এবং ফাংশনালিটি
let allData = {};
let clickCount = 0;

async function loadData() {
    try {
        // GitHub বা আপনার হোস্টিং থেকে ডাটা আনা হচ্ছে
        const response = await fetch('data.json');
        allData = await response.json();
        setupSettings();
        renderHomeFeed();
    } catch (e) { console.error("Data load failed", e); }
}

function setupSettings() {
    const d = allData.settings;
    document.getElementById('fbLink').href = d.fb;
    document.getElementById('tgLinkSidebar').href = d.tg;
    document.getElementById('ytLinkSidebar').href = d.yt;
    document.getElementById('ad-image').src = d.adImg;
    document.getElementById('ad-link').href = d.adLink;
    
    document.getElementById('slideImg1').src = allData.slider.s1;
    document.getElementById('slideImg2').src = allData.slider.s2;
    document.getElementById('slideImg3').src = allData.slider.s3;
}

function getAdminMeta() {
    return `<div class="admin-meta"><img class="admin-avatar" src="${allData.settings.adminAvatar}"/> Admin <i class="fas fa-check-circle" style="color:#0ea5e9;font-size:10px;"></i></div>`;
}

function renderHomeFeed() {
    const container = document.getElementById('firebase-home');
    let combined = [
        ...allData.apps.map(i=>({...i, type:'app'})),
        ...allData.presets.map(i=>({...i, type:'preset'})),
        ...allData.prompts.map(i=>({...i, type:'prompt'})),
        ...allData.videos.map(i=>({...i, type:'video'}))
    ];
    container.innerHTML = combined.map(v => `
        <div class='card' onclick='openDetail("${v.type}", "${v.title}")'>
            <img src='${v.img}'/>
            <div class='card-title'>${v.title}</div>
            ${getAdminMeta()}
        </div>
    `).join('');
}

function openDetail(type, title) {
    clickCount++; if(clickCount % 3 === 0) document.getElementById('interstitial-ad').style.display = 'flex';
    
    const item = [...allData.apps, ...allData.presets, ...allData.prompts, ...allData.videos, ...allData.coding].find(i => i.title === title);
    if(!item) return;

    let html = `<div class='prompt-box'>
        ${getAdminMeta()}
        <h2>${item.title}</h2>
        ${item.img ? `<img class='prompt-img' src='${item.img}'/>` : ''}
        <p>${item.desc || ''}</p>
        ${item.text ? `<div style="background:#f8fafc;padding:15px;border-radius:10px;font-size:13px;border:1px dashed #6366f1;">${item.text}</div>` : ''}
        <a class="download-btn" href="${item.link || '#'}" target="_blank">ACTION NOW</a>
        <a href="${allData.settings.tg}" class="tg-btn-control">JOIN TELEGRAM</a>
        <button onclick="closeDetail()" style="width:100%;margin-top:10px;padding:10px;border:none;border-radius:10px;cursor:pointer;">BACK TO HOME</button>
    </div>`;

    document.getElementById('mainSlider').style.display = 'none';
    document.getElementById('firebase-home').style.display = 'none';
    const dv = document.getElementById('detail-view');
    dv.innerHTML = html;
    dv.style.display = 'block';
    window.scrollTo(0,0);
}

function closeDetail() {
    document.getElementById('detail-view').style.display = 'none';
    document.getElementById('mainSlider').style.display = 'block';
    document.getElementById('firebase-home').style.display = 'block';
}

function toggleNav() { document.getElementById('sidebar').classList.toggle('active'); }
function closeAd() { document.getElementById('interstitial-ad').style.display = 'none'; }

// সার্চ এবং অন্যান্য ফাংশন আগের মতোই কাজ করবে
loadData();

// সিকিউরিটি: F12 এবং Ctrl+U বন্ধ করা
document.onkeydown = function(e) {
    if(e.keyCode == 123 || (e.ctrlKey && (e.keyCode == 85 || e.keyCode == 73))) return false;
};
</script>
</body>
</html>