<?php
  $siteTitle = 'Hillary Smoke — Creative Developer | Portfolio';
  $siteDescription = 'Portfolio of Hillary Smoke — Creative Developer blending code, design, and a touch of AI. Modern, animated, and uniquely themed by your images.';
  $year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($siteDescription) ?>" />
    <meta name="theme-color" content="#0b0b0f" />
    <meta property="og:title" content="<?= htmlspecialchars($siteTitle) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($siteDescription) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta name="twitter:card" content="summary_large_image" />
    <style>
      :root {
        --bg: #0b0b0f;
        --surface: #12121a;
        --text: #e9ecf1;
        --muted: #9aa3b2;
        --primary: #7c5cff;
        --accent: #38d6c6;
        --ring: 0 0 0 0 rgba(0,0,0,0);
      }

      * { box-sizing: border-box; }
      html, body { height: 100%; }
      body {
        margin: 0;
        font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
        background: var(--bg);
        color: var(--text);
        line-height: 1.5;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

      /* Animated gradient sky */
      .bg-sky {
        position: fixed;
        inset: 0;
        z-index: -2;
        background: radial-gradient(1200px 600px at 10% -10%, rgba(124,92,255,.25), transparent),
                    radial-gradient(1000px 500px at 90% -20%, rgba(56,214,198,.2), transparent),
                    radial-gradient(800px 400px at 50% 120%, rgba(255,162,89,.2), transparent),
                    linear-gradient(180deg, #0b0b0f, #0b0b10 50%, #0c0d12);
        filter: saturate(1.1) contrast(1.05);
        animation: skyMove 30s linear infinite alternate;
      }
      @keyframes skyMove {
        from { filter: hue-rotate(0deg) saturate(1.05); }
        to   { filter: hue-rotate(15deg) saturate(1.15); }
      }

      /* Floating glass orbs */
      .orbs {
        position: fixed;
        inset: 0;
        pointer-events: none;
        z-index: -1;
        overflow: hidden;
      }
      .orb {
        position: absolute;
        width: 48vmin; height: 48vmin;
        background: radial-gradient(circle at 30% 30%, rgba(255,255,255,.25), rgba(255,255,255,.05) 40%, rgba(255,255,255,0) 60%),
                    radial-gradient(circle at 70% 70%, var(--primary), transparent 60%);
        filter: blur(20px) saturate(1.2);
        border-radius: 50%;
        mix-blend-mode: screen;
        animation: float 38s ease-in-out infinite;
      }
      .orb.o1 { left: -10vmin; top: 10vmin; animation-delay: 0s; }
      .orb.o2 { right: -12vmin; top: 20vmin; animation-delay: -8s; }
      .orb.o3 { left: 20vmin; bottom: -14vmin; animation-delay: -16s; }
      @keyframes float {
        0%   { transform: translate3d(0,0,0) rotate(0.01deg); }
        50%  { transform: translate3d(2vmin,-3vmin,0) rotate(60deg); }
        100% { transform: translate3d(-1vmin,2vmin,0) rotate(120deg); }
      }

      header {
        position: sticky; top: 0; z-index: 10;
        background: linear-gradient(to bottom, rgba(11,11,15,.7), rgba(11,11,15,0));
        backdrop-filter: blur(6px);
      }
      .nav {
        max-width: 1100px; margin: 0 auto; padding: 16px 20px;
        display: flex; align-items: center; justify-content: space-between;
      }
      .brand {
        display: inline-flex; align-items: center; gap: 10px;
        text-decoration: none; color: var(--text);
      }
      .brand-badge {
        width: 28px; height: 28px; border-radius: 8px;
        background: conic-gradient(from 120deg, var(--primary), var(--accent));
        box-shadow: inset 0 0 0 2px rgba(255,255,255,.06), 0 6px 20px rgba(0,0,0,.35);
      }
      .brand span { font-weight: 700; letter-spacing: .3px; }
      nav a { color: var(--muted); text-decoration: none; margin-left: 18px; font-weight: 600; }
      nav a:hover { color: var(--text); }

      .wrap { max-width: 1100px; margin: 0 auto; padding: 24px 20px 80px; }

      .hero {
        padding: 64px 0 32px;
        display: grid; grid-template-columns: 1.2fr .8fr; gap: 32px; align-items: center;
      }
      .hero h1 { font-size: clamp(32px, 5vw, 56px); line-height: 1.05; margin: 0 0 10px; }
      .hero p.lede { font-size: clamp(16px, 2.2vw, 20px); color: var(--muted); margin: 0 0 26px; }
      .actions { display: flex; gap: 12px; flex-wrap: wrap; }
      .btn {
        appearance: none; cursor: pointer; border: 0; border-radius: 12px; padding: 12px 16px; font-weight: 700;
        color: #0b0b0f; background: var(--text); transition: transform .2s ease, box-shadow .2s ease;
        box-shadow: 0 10px 24px rgba(0,0,0,.25), inset 0 0 0 1px rgba(255,255,255,.08);
      }
      .btn:hover { transform: translateY(-2px); }
      .btn.secondary { background: transparent; color: var(--text);
        box-shadow: inset 0 0 0 1px rgba(255,255,255,.15), 0 10px 24px rgba(0,0,0,.25); }
      .btn.accent { background: var(--accent); color: #0b0b0f; }

      .glass {
        background: linear-gradient(180deg, rgba(255,255,255,.06), rgba(255,255,255,.02));
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,.35);
      }

      .panel {
        padding: 18px; display: grid; gap: 14px;
      }

      .ai {
        display: grid; gap: 14px; align-content: start;
      }
      .ai h3 { margin: 0; font-size: 16px; letter-spacing: .3px; opacity: .9; }
      .ai small { color: var(--muted); }
      .ai .swatches { display: flex; gap: 8px; }
      .ai .swatch { width: 28px; height: 28px; border-radius: 8px; border: 1px solid rgba(255,255,255,.18); }
      .ai .controls { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; }
      .file { position: relative; }
      .file input { position: absolute; inset: 0; opacity: 0; cursor: pointer; }
      .file .btn { padding-left: 44px; }
      .file .icon { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); width: 18px; height: 18px; border-radius: 4px; background: var(--primary); }
      .ai .preview { width: 100%; max-height: 220px; object-fit: cover; border-radius: 12px; border: 1px solid rgba(255,255,255,.12); }

      .section { margin-top: 42px; }
      .section h2 { margin: 0 0 12px; font-size: 22px; letter-spacing: .3px; }
      .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
      .card { padding: 16px; display: grid; gap: 8px; min-height: 180px; transition: transform .25s ease, box-shadow .25s ease; }
      .card:hover { transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,.4); }
      .chip { display: inline-flex; align-items: center; gap: 8px; padding: 6px 10px; border-radius: 999px; font-size: 12px; color: var(--text);
        background: linear-gradient(180deg, rgba(255,255,255,.09), rgba(255,255,255,.03)); border: 1px solid rgba(255,255,255,.15); }

      .about { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
      .about p { margin: 0; color: var(--muted); }

      .contact { display: grid; grid-template-columns: 1fr .8fr; gap: 16px; align-items: start; }
      .list { display: grid; gap: 10px; color: var(--muted); }
      .list a { color: var(--text); text-decoration: none; }
      .list a:hover { text-decoration: underline; }

      footer { margin: 42px 0 16px; color: var(--muted); text-align: center; font-size: 14px; }

      /* Reveal */
      .reveal { opacity: 0; transform: translateY(14px); transition: opacity .7s ease, transform .7s ease; }
      .reveal.visible { opacity: 1; transform: translateY(0); }

      /* Responsive */
      @media (max-width: 980px) {
        .hero { grid-template-columns: 1fr; }
        .about { grid-template-columns: 1fr; }
        .contact { grid-template-columns: 1fr; }
        .grid { grid-template-columns: 1fr 1fr; }
      }
      @media (max-width: 640px) {
        .grid { grid-template-columns: 1fr; }
      }

      @media (prefers-reduced-motion: reduce) {
        .orb, .bg-sky { animation: none; }
        .reveal { transition: none; }
      }
    </style>
  </head>
  <body>
    <div class="bg-sky"></div>
    <div class="orbs" aria-hidden="true">
      <div class="orb o1"></div>
      <div class="orb o2"></div>
      <div class="orb o3"></div>
    </div>

    <header>
      <div class="nav">
        <a href="#top" class="brand">
          <span class="brand-badge" aria-hidden="true"></span>
          <span>Hillary Smoke</span>
        </a>
        <nav>
          <a href="#work">Work</a>
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
        </nav>
      </div>
    </header>

    <main id="top" class="wrap">
      <section class="hero reveal visible">
        <div>
          <h1>Crafting modern products with code, design, and a touch of AI.</h1>
          <p class="lede">I'm <strong>Hillary Smoke</strong>, a creative developer building engaging, performant, and accessible experiences. This portfolio is single-file, fast, and uniquely themable using your own images.</p>
          <div class="actions">
            <a class="btn" href="#work">See Work</a>
            <a class="btn secondary" href="#ai">AI Theme Learner</a>
            <a class="btn accent" href="#contact">Get in touch</a>
          </div>
        </div>
        <aside class="glass panel ai" id="ai">
          <h3>AI Theme Learner</h3>
          <small>Extracts a color palette (K-means) from an image to theme the site. Private and offline.</small>
          <div class="controls">
            <label class="file btn secondary" aria-label="Upload image to learn theme">
              <span class="icon" aria-hidden="true"></span>
              <input id="file" type="file" accept="image/*" />
              Choose image
            </label>
            <button class="btn" id="resetTheme" type="button">Reset theme</button>
          </div>
          <img id="preview" class="preview" alt="Selected image preview" hidden />
          <div class="swatches" id="swatches" aria-label="Extracted palette" role="list"></div>
        </aside>
      </section>

      <section id="work" class="section reveal">
        <h2>Selected Work</h2>
        <div class="grid">
          <article class="glass card">
            <span class="chip">Interactive Data Viz</span>
            <h3>Real‑time Analytics Dashboard</h3>
            <p>High‑fps WebGL charts, micro‑interactions, and keyboard‑first UX. Shipped with <strong>99th‑percentile performance</strong>.</p>
          </article>
          <article class="glass card">
            <span class="chip">Product Engineering</span>
            <h3>Growth Experiment Platform</h3>
            <p>Config‑driven A/B framework, feature flags, and cohort analysis. Scaled to millions of users.</p>
          </article>
          <article class="glass card">
            <span class="chip">Creative Coding</span>
            <h3>Generative Brand Playground</h3>
            <p>Procedural shapes and palettes with exportable assets for brand teams and social campaigns.</p>
          </article>
        </div>
      </section>

      <section id="about" class="section reveal about">
        <div class="glass panel">
          <h2>About</h2>
          <p>I blend engineering with design to build experiences that feel effortless. I care about accessibility, performance, and maintainable systems. I enjoy prototyping fast, validating with users, and then polishing details that delight.</p>
        </div>
        <div class="glass panel">
          <h2>Skills</h2>
          <p>TypeScript, React, Node, PHP, WebGL, data visualization, design systems, product strategy, and a practical touch of AI for smarter UX.</p>
        </div>
      </section>

      <section id="contact" class="section reveal contact">
        <div class="glass panel">
          <h2>Contact</h2>
          <div class="list">
            <a href="mailto:hello@hillarysmoke.com">hello@hillarysmoke.com</a>
            <span>Open to freelance, contract, or full‑time roles.</span>
          </div>
        </div>
        <div class="glass panel">
          <h2>Links</h2>
          <div class="list">
            <a href="#work">Case studies</a>
            <a href="#ai">AI Theme Learner</a>
            <a href="#top">Back to top</a>
          </div>
        </div>
      </section>

      <footer>
        <div>© <?= $year ?> Hillary Smoke. Built as a single‑file portfolio with an AI‑driven theme.</div>
      </footer>
    </main>

    <script>
      const $ = (sel) => document.querySelector(sel);
      const $$ = (sel) => Array.from(document.querySelectorAll(sel));

      const fileInput = $('#file');
      const previewImg = $('#preview');
      const swatchesEl = $('#swatches');
      const resetBtn = $('#resetTheme');

      const THEME_KEY = 'aiTheme.v1';

      function clamp01(x){ return Math.max(0, Math.min(1, x)); }
      function rgbToHsl(r,g,b){
        r/=255; g/=255; b/=255;
        const max=Math.max(r,g,b), min=Math.min(r,g,b);
        let h,s,l=(max+min)/2;
        if(max===min){ h=s=0; }
        else {
          const d=max-min;
          s=l>0.5? d/(2-max-min) : d/(max+min);
          switch(max){
            case r: h=(g-b)/d+(g<b?6:0); break;
            case g: h=(b-r)/d+2; break;
            case b: h=(r-g)/d+4; break;
          }
          h/=6;
        }
        return [h,s,l];
      }
      function hslToCss([h,s,l]){ return `hsl(${Math.round(h*360)} ${Math.round(s*100)}% ${Math.round(l*100)}%)`; }
      function rgbToCss([r,g,b]){ return `rgb(${r|0} ${g|0} ${b|0})`; }
      function luminance(r,g,b){
        const srgb=[r,g,b].map(v=>{
          v/=255; return v<=0.03928? v/12.92 : Math.pow((v+0.055)/1.055, 2.4);
        });
        return 0.2126*srgb[0] + 0.7152*srgb[1] + 0.0722*srgb[2];
      }
      function contrast(rgb1, rgb2){
        const L1=luminance(...rgb1), L2=luminance(...rgb2);
        const [a,b]=L1>L2? [L1,L2] : [L2,L1];
        return (a+0.05)/(b+0.05);
      }

      function kmeans(points, k=5, maxIter=20){
        if(points.length===0) return [];
        const centroids=[];
        const used=new Set();
        while(centroids.length<k && used.size<points.length){
          const i=Math.floor(Math.random()*points.length);
          if(used.has(i)) continue; used.add(i);
          centroids.push(points[i].slice());
        }
        if(centroids.length===0) return [];
        const dist=(a,b)=>{
          const dr=a[0]-b[0], dg=a[1]-b[1], db=a[2]-b[2];
          return dr*dr+dg*dg+db*db;
        };
        for(let iter=0; iter<maxIter; iter++){
          const groups=Array.from({length:centroids.length},()=>({sum:[0,0,0], n:0}));
          for(const p of points){
            let best=0, bestD=Infinity;
            for(let c=0;c<centroids.length;c++){
              const d=dist(p, centroids[c]);
              if(d<bestD){ bestD=d; best=c; }
            }
            const g=groups[best]; g.sum[0]+=p[0]; g.sum[1]+=p[1]; g.sum[2]+=p[2]; g.n++;
          }
          let moved=false;
          for(let c=0;c<centroids.length;c++){
            if(groups[c].n>0){
              const next=[groups[c].sum[0]/groups[c].n, groups[c].sum[1]/groups[c].n, groups[c].sum[2]/groups[c].n];
              if(dist(next, centroids[c])>1) moved=true;
              centroids[c]=next;
            }
          }
          if(!moved) break;
        }
        return centroids;
      }

      function chooseThemeFromPalette(centroids){
        if(!centroids || centroids.length===0) return null;
        const enriched = centroids.map(rgb=>{
          const [h,s,l] = rgbToHsl(rgb[0],rgb[1],rgb[2]);
          return { rgb, h, s, l };
        });
        const sortedByL = [...enriched].sort((a,b)=>a.l-b.l);
        let bg = sortedByL[0];
        if(bg.l < 0.06 && sortedByL[1]) bg = sortedByL[1];
        if(bg.l > 0.92 && sortedByL[1]) bg = sortedByL[1];

        let text = sortedByL[sortedByL.length-1];
        const c = contrast(bg.rgb, text.rgb);
        if(c < 4.5){
          const black=[0,0,0], white=[255,255,255];
          text = luminance(...bg.rgb) > 0.5 ? {rgb:black, h:0,s:0,l:0} : {rgb:white, h:0,s:0,l:1};
        }

        const mids = enriched.filter(x=>x!==bg && x!==text);
        let primary = mids.sort((a,b)=>b.s-a.s)[0] || enriched[0];
        let accent = mids.find(x=>{
          const dr=x.rgb[0]-primary.rgb[0];
          const dg=x.rgb[1]-primary.rgb[1];
          const db=x.rgb[2]-primary.rgb[2];
          return (dr*dr+dg*dg+db*db) > 180*180;
        }) || sortedByL[Math.floor(sortedByL.length/2)] || primary;

        const surfaceRgb = bg.l < 0.2 ? [
          clamp01(bg.rgb[0]+18), clamp01(bg.rgb[1]+18), clamp01(bg.rgb[2]+18)
        ] : [
          clamp01(bg.rgb[0]-18), clamp01(bg.rgb[1]-18), clamp01(bg.rgb[2]-18)
        ];

        return {
          bg: bg.rgb.map(v=>Math.max(0, Math.min(255, Math.round(v)))) ,
          surface: surfaceRgb.map(v=>Math.max(0, Math.min(255, Math.round(v)))),
          text: text.rgb.map(v=>Math.round(v)),
          primary: primary.rgb.map(v=>Math.round(v)),
          accent: accent.rgb.map(v=>Math.round(v)),
        };
      }

      function applyTheme(theme){
        if(!theme) return;
        const root=document.documentElement;
        root.style.setProperty('--bg', rgbToCss(theme.bg));
        root.style.setProperty('--surface', rgbToCss(theme.surface));
        root.style.setProperty('--text', rgbToCss(theme.text));
        root.style.setProperty('--primary', rgbToCss(theme.primary));
        root.style.setProperty('--accent', rgbToCss(theme.accent));
        try { localStorage.setItem(THEME_KEY, JSON.stringify(theme)); } catch {}
        document.querySelector('meta[name="theme-color"]').setAttribute('content', rgbToCss(theme.bg));
        renderSwatches(theme);
      }

      function renderSwatches(theme){
        if(!theme) { swatchesEl.innerHTML=''; return; }
        const entries = [
          ['BG', theme.bg], ['Surface', theme.surface], ['Text', theme.text], ['Primary', theme.primary], ['Accent', theme.accent]
        ];
        swatchesEl.innerHTML = entries.map(([label, rgb])=>{
          const css = rgbToCss(rgb);
          return `<div class="swatch" role="listitem" title="${label}: ${css}" style="background:${css}"></div>`;
        }).join('');
      }

      function loadSavedTheme(){
        try{
          const raw=localStorage.getItem(THEME_KEY);
          if(!raw) return;
          const theme=JSON.parse(raw);
          if(theme && theme.bg && theme.text) applyTheme(theme);
        }catch{}
      }

      function sampleImageToPoints(img){
        const w = 96, h = Math.max(1, Math.round(img.naturalHeight * (w / img.naturalWidth)));
        const canvas = document.createElement('canvas');
        canvas.width = w; canvas.height = h;
        const ctx = canvas.getContext('2d', { willReadFrequently: true });
        ctx.drawImage(img, 0, 0, w, h);
        const data = ctx.getImageData(0, 0, w, h).data;
        const pts = [];
        for(let i=0;i<data.length;i+=4){
          const a=data[i+3];
          if(a<200) continue;
          const r=data[i], g=data[i+1], b=data[i+2];
          pts.push([r,g,b]);
        }
        return pts;
      }

      fileInput?.addEventListener('change', (e)=>{
        const file = e.target.files && e.target.files[0];
        if(!file) return;
        const reader = new FileReader();
        reader.onload = () => {
          previewImg.src = reader.result;
          previewImg.hidden = false;
          requestAnimationFrame(()=>{
            // Give the browser a frame to layout image
            setTimeout(()=>{
              try {
                const pts = sampleImageToPoints(previewImg);
                if(pts.length < 16){ alert('Not enough pixels to learn a theme.'); return; }
                const cents = kmeans(pts, 5, 20);
                const theme = chooseThemeFromPalette(cents);
                applyTheme(theme);
              } catch (err) {
                console.error(err);
                alert('Failed to extract a theme from this image.');
              }
            }, 40);
          });
        };
        reader.readAsDataURL(file);
      });

      resetBtn?.addEventListener('click', ()=>{
        try { localStorage.removeItem(THEME_KEY); } catch {}
        location.reload();
      });

      loadSavedTheme();

      const io = new IntersectionObserver((entries)=>{
        for(const entry of entries){
          if(entry.isIntersecting){
            entry.target.classList.add('visible');
            io.unobserve(entry.target);
          }
        }
      }, { threshold: .1 });
      $$('.reveal').forEach(el=>{ if(!el.classList.contains('visible')) io.observe(el); });
    </script>
  </body>
</html>
