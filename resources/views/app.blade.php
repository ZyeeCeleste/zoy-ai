<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zoy AI — AI for Construction</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="ZyeeCeleste for Zoy AI">
<meta name="copyright" content="Zoy AI © 2026 ZyeeCeleste">
<script src="https://app.midtrans.com/snap/snap.js" data-client-key="Mid-client-_ptnrfZIXwHImhz3"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<!-- KaTeX CSS & JS untuk Render Rumus Matematika / Kimia -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css">
<script src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js"></script>
@php
$zoyVersion = '3.0.0';
$zoyAuthor = 'ZyeeCeleste';
$zoyName = 'Zoy AI';

$zoyLogoUrl = asset('images/zoy-logo.png');
$zoyLogoFallback = 'data:image/svg+xml,' . urlencode('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2"><path d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6"/></svg>');

$navLinks = [
    ['name' => __('Riset'), 'url' => '#research', 'icon' => '◈'],
    ['name' => __('Produk'), 'url' => '#products', 'icon' => '◆'],
    ['name' => __('Bisnis'), 'url' => '#business', 'icon' => '◇'],
    ['name' => __('Pengembangan'), 'url' => '#development', 'icon' => '✦'],
    ['name' => __('Perusahaan'), 'url' => '#company', 'icon' => '■'],
    ['name' => __('Fondasi'), 'url' => '#foundation', 'icon' => '▣'],
];

$exploreLinks = [
    ['name' => 'Company', 'url' => 'https://zoyai.com/company', 'icon' => '■', 'bg' => '#3b82f6'],
    ['name' => 'Research', 'url' => 'https://zoyai.com/research', 'icon' => '◈', 'bg' => '#8b5cf6'],
    ['name' => 'Products', 'url' => 'https://zoyai.com/products', 'icon' => '◆', 'bg' => '#22c55e'],
    ['name' => 'Security', 'url' => 'https://zoyai.com/security', 'icon' => '⬡', 'bg' => '#ef4444'],
    ['name' => 'Engineering', 'url' => 'https://zoyai.com/engineering', 'icon' => '✦', 'bg' => '#f59e0b'],
    ['name' => 'Safety', 'url' => 'https://zoyai.com/safety', 'icon' => '⊞', 'bg' => '#3b82f6'],
    ['name' => 'Future of AI', 'url' => 'https://zoyai.com/future-ai', 'icon' => '⟐', 'bg' => '#8b5cf6'],
    ['name' => 'Applied AI', 'url' => 'https://zoyai.com/applied-ai', 'icon' => '◉', 'bg' => '#22c55e'],
    ['name' => 'AI Adoption', 'url' => 'https://zoyai.com/ai-adoption', 'icon' => '⬆', 'bg' => '#f59e0b'],
    ['name' => 'AI Development', 'url' => 'https://zoyai.com/ai-dev', 'icon' => '⌨', 'bg' => '#ef4444'],
    ['name' => 'Construction Tech', 'url' => 'https://zoyai.com/construction-tech', 'icon' => '⬡', 'bg' => '#3b82f6'],
];
@endphp

<style>
/* ============================================================
   ROOT VARIABLES - DARK THEME (DEFAULT)
   ============================================================ */
:root{
  --zoy-bg:#05070c;
  --zoy-navy:#0a1128;
  --zoy-panel:#0d1330;
  --zoy-panel2:#0f1638;
  --zoy-line:rgba(148,163,214,0.14);
  --zoy-text:#e7ebfb;
  --zoy-muted:#8b93b8;
  --zoy-muted2:#5c6488;
  --zoy-blue:#3b82f6;
  --zoy-indigo:#4f46e5;
  --zoy-violet:#8b5cf6;
  --zoy-purple:#a855f7;
  --zoy-green:#22c55e;
  --zoy-red:#ef4444;
  --zoy-yellow:#f59e0b;
  --zoy-grad:linear-gradient(120deg,#3b82f6,#8b5cf6 60%,#a855f7);
  --zoy-grad-soft:linear-gradient(120deg,rgba(59,130,246,0.18),rgba(168,85,247,0.18));
  --zoy-radius:14px;
  --zoy-shadow:0 0 40px rgba(139,92,246,0.25);
  --zoy-font-d:'Space Grotesk',sans-serif;
  --zoy-font-b:'Inter',sans-serif;
  --zoy-font-m:'IBM Plex Mono',monospace;
}

/* ============================================================
   LIGHT THEME
   ============================================================ */
body.zoy-light-theme {
  --zoy-bg: #f4f6fa;
  --zoy-navy: #ffffff;
  --zoy-panel: #ffffff;
  --zoy-panel2: #f8f9fa;
  --zoy-text: #0f172a;
  --zoy-muted: #475569;
  --zoy-muted2: #64748b;
  --zoy-line: rgba(15, 23, 42, 0.08);
  --zoy-shadow: 0 0 40px rgba(0,0,0,0.08);
}

body.zoy-light-theme .zoy-nav {
  background: rgba(255,255,255,0.85);
  border-bottom-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-dropdown {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-dropdown-item:hover {
  background: rgba(59,130,246,0.06);
}

body.zoy-light-theme .zoy-sidebar {
  background: #ffffff;
  border-right-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-sb-item:hover {
  background: rgba(0,0,0,0.04);
}

body.zoy-light-theme .zoy-sb-item.active {
  background: rgba(59,130,246,0.10);
  color: #2563eb;
}

body.zoy-light-theme .zoy-topbar {
  background: rgba(255,255,255,0.8);
  border-bottom-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-msg .bubble {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-msg.user .bubble {
  background: rgba(59,130,246,0.08);
  border-color: rgba(59,130,246,0.2);
}

body.zoy-light-theme .zoy-composer {
  background: rgba(255,255,255,0.6);
  border-top-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-composer-inner {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-plan {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-plan.premium {
  background: linear-gradient(180deg, rgba(139,92,246,0.08), #ffffff);
}

body.zoy-light-theme .zoy-slide {
  background: linear-gradient(160deg, #ffffff, #f8f9fa);
}

body.zoy-light-theme .zoy-slide-visual {
  background: rgba(59,130,246,0.04);
}

body.zoy-light-theme .zoy-flow-step {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-guest {
  background: #ffffff;
  border-color: rgba(139,92,246,0.3);
}

body.zoy-light-theme .zoy-popup {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-modal-box {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-rab-table th {
  background: var(--zoy-panel2);
}

body.zoy-light-theme .zoy-rab-table td {
  border-bottom-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-rab-table input,
body.zoy-light-theme .zoy-rab-table select {
  background: rgba(0,0,0,0.02);
  border-color: var(--zoy-line);
  color: var(--zoy-text);
}

body.zoy-light-theme .zoy-rab-table input:focus,
body.zoy-light-theme .zoy-rab-table select:focus {
  border-color: var(--zoy-blue);
}

body.zoy-light-theme .zoy-sum-card {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-sum-card.grand {
  border-color: rgba(139,92,246,0.3);
  background: linear-gradient(160deg, rgba(139,92,246,0.06), #ffffff);
}

body.zoy-light-theme .zoy-cost-detail {
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-cost-detail th {
  background: var(--zoy-panel2);
}

body.zoy-light-theme .zoy-cost-detail td {
  border-bottom-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-token {
  background: rgba(59,130,246,0.06);
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-calc-result {
  border-color: rgba(59,130,246,0.2);
  background: rgba(59,130,246,0.04);
}

body.zoy-light-theme .zoy-field select,
body.zoy-light-theme .zoy-field input {
  background: #ffffff;
  border-color: var(--zoy-line);
  color: var(--zoy-text);
}

body.zoy-light-theme .zoy-s-grid {
  background: transparent;
}

body.zoy-light-theme .zoy-s-tab.active {
  background: rgba(59,130,246,0.10);
  color: #2563eb;
}

body.zoy-light-theme .zoy-s-tab:hover {
  background: rgba(0,0,0,0.04);
}

body.zoy-light-theme .zoy-hist-row {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-hist-row:hover {
  background: rgba(0,0,0,0.02);
}

body.zoy-light-theme .zoy-attachment {
  background: rgba(59,130,246,0.06);
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-notification {
  background: #ffffff;
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-bg-grid {
  opacity: 0.3;
}

body.zoy-light-theme .zoy-glow {
  opacity: 0.15;
}

body.zoy-light-theme .zoy-sb-history a:hover {
  background: rgba(0,0,0,0.04);
}

body.zoy-light-theme .zoy-sb-new {
  background: rgba(59,130,246,0.08);
  border-color: rgba(139,92,246,0.3);
}

body.zoy-light-theme .zoy-oauth-btn {
  background: rgba(0,0,0,0.02);
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-oauth-btn:hover {
  background: rgba(0,0,0,0.04);
}

body.zoy-light-theme .zoy-divider::before,
body.zoy-light-theme .zoy-divider::after {
  background: var(--zoy-line);
}

body.zoy-light-theme .zoy-modal-box input,
body.zoy-light-theme .zoy-modal-box select {
  background: #ffffff;
  border-color: var(--zoy-line);
  color: var(--zoy-text);
}

body.zoy-light-theme .zoy-modal-box input:focus {
  border-color: var(--zoy-blue);
}

body.zoy-light-theme .zoy-popup-timer {
  background: rgba(0,0,0,0.02);
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-popup-desc strong {
  color: #d97706;
}

body.zoy-light-theme .zoy-calc-btn {
  background: #ffffff;
  border-color: var(--zoy-line);
  color: var(--zoy-text);
}

body.zoy-light-theme .zoy-calc-btn:hover {
  background: rgba(59,130,246,0.06);
  border-color: var(--zoy-blue);
}

body.zoy-light-theme .zoy-calc-btn[data-action="equals"] {
  background: var(--zoy-grad);
  color: #fff;
}

body.zoy-light-theme .zoy-calc-btn[data-action="clear"],
body.zoy-light-theme .zoy-calc-btn[data-action="backspace"] {
  color: #dc2626;
}

body.zoy-light-theme .zoy-icon-btn {
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-icon-btn:hover {
  border-color: var(--zoy-blue);
}

body.zoy-light-theme .zoy-sb-collapse {
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-toolbar-btn {
  background: rgba(0,0,0,0.02);
}

body.zoy-light-theme .zoy-toolbar-btn:hover {
  background: rgba(0,0,0,0.04);
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-token-badge {
  background: rgba(0,0,0,0.02);
  border-color: var(--zoy-line);
}

body.zoy-light-theme .zoy-rate-row input {
  background: #ffffff;
  border-color: var(--zoy-line);
  color: var(--zoy-text);
}

body.zoy-light-theme .zoy-rate-row input:focus {
  border-color: var(--zoy-blue);
}

/* ============================================================
   GENERAL RESET & BASE
   ============================================================ */
*{box-sizing:border-box;margin:0;padding:0;}
html{scroll-behavior:smooth;}
body{background:var(--zoy-bg);color:var(--zoy-text);font-family:var(--zoy-font-b);min-height:100vh;overflow-x:hidden;line-height:1.5;}
a{color:inherit;text-decoration:none;}button{font-family:inherit;cursor:pointer;}

/* TRANSLATE MODAL */
#zoyTranslateModal .zoy-modal-box{max-width:600px !important;}
#zoyTranslateText{font-family:'Inter',sans-serif;line-height:1.6;}
#zoyTranslateOutput{font-family:'Inter',sans-serif;line-height:1.8;white-space:pre-wrap;word-wrap:break-word;}
#zoyTranslateResult{background:var(--zoy-panel2);border:1px solid var(--zoy-line);border-radius:10px;padding:12px;margin-top:8px;max-height:300px;overflow-y:auto;}

.zoy-bg-grid{position:fixed;inset:0;z-index:0;pointer-events:none;background-image:linear-gradient(rgba(59,130,246,0.06)1px,transparent 1px),linear-gradient(90deg,rgba(59,130,246,0.06)1px,transparent 1px);background-size:44px 44px;mask-image:radial-gradient(ellipse 80% 60% at 50% 0%,black 40%,transparent 90%);}
.zoy-glow{position:fixed;border-radius:50%;filter:blur(90px);z-index:0;pointer-events:none;opacity:0.35;}
.zoy-glow.a{width:520px;height:520px;top:-160px;left:-120px;background:var(--zoy-blue);}
.zoy-glow.b{width:480px;height:480px;top:20%;right:-160px;background:var(--zoy-purple);}
.zoy-glow.c{width:420px;height:420px;bottom:-140px;left:30%;background:var(--zoy-indigo);}

.zoy-nav{position:sticky;top:0;z-index:50;display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1.5rem;backdrop-filter:blur(14px);background:rgba(5,7,12,0.72);border-bottom:1px solid var(--zoy-line);}
.zoy-brand{display:flex;align-items:center;gap:0.625rem;font-family:var(--zoy-font-d);font-weight:700;font-size:1.125rem;cursor:pointer;}
.zoy-brand img{height:1.875rem;width:auto;border-radius:0.5rem;}
.zoy-brand .brand-text{display:flex;align-items:center;gap:0.625rem;}
.zoy-brand-mark{width:1.875rem;height:1.875rem;border-radius:0.5rem;background:var(--zoy-grad);display:flex;align-items:center;justify-content:center;box-shadow:0 0 18px rgba(139,92,246,0.55);overflow:hidden;}
.zoy-brand-mark img{width:100%;height:100%;object-fit:cover;}
.zoy-brand-mark svg{width:1.0625rem;height:1.0625rem;}
.zoy-nav-links{display:flex;align-items:center;gap:1.5rem;}
.zoy-nav-links a{font-size:0.875rem;color:var(--zoy-muted);font-weight:500;transition:color .2s;display:flex;align-items:center;gap:0.375rem;}
.zoy-nav-links a:hover{color:var(--zoy-text);}
.zoy-nav-cta{padding:0.5625rem 1.125rem;border-radius:0.625rem;border:1px solid rgba(139,92,246,0.5);background:linear-gradient(120deg,rgba(59,130,246,0.14),rgba(168,85,247,0.14));font-weight:600;font-size:0.8125rem;color:#fff;}
.zoy-nav-menu{display:none;background:none;border:1px solid var(--zoy-line);border-radius:0.5rem;padding:0.375rem 0.75rem;color:var(--zoy-text);font-size:1.375rem;}

.zoy-dropdown{display:none;position:absolute;right:0;top:2.8125rem;background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:var(--zoy-radius);min-width:280px;box-shadow:0 20px 60px rgba(0,0,0,0.5);z-index:100;padding:0.5rem 0;animation:zoyDropIn .2s ease;}
@keyframes zoyDropIn{0%{opacity:0;transform:translateY(-0.5rem);}100%{opacity:1;transform:translateY(0);}}
.zoy-dropdown-section{padding:0.5rem 1rem 0.25rem;font-size:0.625rem;text-transform:uppercase;color:var(--zoy-muted2);font-family:var(--zoy-font-m);letter-spacing:0.5px;}
.zoy-dropdown-divider{height:1px;background:var(--zoy-line);margin:0.375rem 1rem;}
.zoy-dropdown-item{display:flex;align-items:center;gap:0.625rem;width:100%;padding:0.625rem 1rem;background:none;border:none;color:var(--zoy-text);font-size:0.8125rem;text-align:left;font-family:inherit;transition:background .15s;}
.zoy-dropdown-item:hover{background:rgba(59,130,246,0.08);}
.zoy-dropdown-item .shortcut{margin-left:auto;font-size:0.625rem;color:var(--zoy-muted2);font-family:var(--zoy-font-m);}

.zoy-hero{max-width:900px;margin:0 auto;padding:5rem 1.5rem 2.5rem;text-align:center;}
.zoy-reveal{opacity:0;transform:translateY(1.375rem);transition:opacity .8s ease,transform .8s ease;}
.zoy-reveal.in{opacity:1;transform:translateY(0);}
/* Paksa hero section tetap muncul */
#zoyLandingHero .zoy-reveal {
  opacity: 1 !important;
  transform: translateY(0) !important;
}
.zoy-eyebrow{display:inline-flex;align-items:center;gap:0.5rem;padding:0.375rem 0.875rem;border-radius:999px;border:1px solid var(--zoy-line);background:rgba(255,255,255,0.02);font-size:0.75rem;color:var(--zoy-muted);font-family:var(--zoy-font-m);letter-spacing:0.4px;margin-bottom:1.25rem;}
.zoy-eyebrow .dot{width:0.375rem;height:0.375rem;border-radius:50%;background:var(--zoy-green);box-shadow:0 0 8px var(--zoy-green);}
.zoy-hero h1{font-family:var(--zoy-font-d);font-weight:700;font-size:clamp(1.875rem,5vw,3.5rem);line-height:1.08;letter-spacing:-0.5px;}
.zoy-hero h1 .grad{background:var(--zoy-grad);-webkit-background-clip:text;background-clip:text;color:transparent;}
.zoy-hero p{margin:1.25rem auto 0;max-width:600px;color:var(--zoy-muted);font-size:1rem;}
.zoy-hero-actions{display:flex;gap:0.75rem;justify-content:center;margin-top:1.875rem;flex-wrap:wrap;}
.zoy-btn{padding:0.75rem 1.5rem;border-radius:0.6875rem;font-weight:600;font-size:0.875rem;border:1px solid transparent;transition:transform .15s,box-shadow .2s;}
.zoy-btn:hover{transform:translateY(-0.0625rem);}
.zoy-btn-primary{background:var(--zoy-grad);color:#fff;box-shadow:0 8px 30px rgba(139,92,246,0.35);}
.zoy-btn-ghost{background:rgba(255,255,255,0.03);border-color:var(--zoy-line);color:var(--zoy-text);}
.zoy-hero-note{margin-top:0.75rem;font-size:0.75rem;color:var(--zoy-muted2);}

.zoy-section{max-width:1120px;margin:0 auto;padding:4.375rem 1.5rem;}
.zoy-section-head{text-align:center;max-width:600px;margin:0 auto 2.5rem;}
.zoy-section-tag{font-family:var(--zoy-font-m);font-size:0.6875rem;letter-spacing:1.5px;text-transform:uppercase;color:var(--zoy-blue);}
.zoy-section-title{font-family:var(--zoy-font-d);font-weight:700;font-size:clamp(1.375rem,3vw,2rem);margin-top:0.5rem;}
.zoy-section-desc{color:var(--zoy-muted);margin-top:0.625rem;font-size:0.875rem;}

.zoy-slider-wrap{position:relative;}
.zoy-slider-track{overflow:hidden;border-radius:var(--zoy-radius);border:1px solid var(--zoy-line);}
.zoy-slider-inner{display:flex;transition:transform .55s cubic-bezier(.65,0,.35,1);}
.zoy-slide{min-width:100%;padding:2.25rem 2rem;background:linear-gradient(160deg,var(--zoy-panel),var(--zoy-panel2));display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;align-items:center;}
.zoy-slide-tag{font-family:var(--zoy-font-m);font-size:0.6875rem;color:var(--zoy-violet);letter-spacing:1px;text-transform:uppercase;}
.zoy-slide h3{font-family:var(--zoy-font-d);font-size:1.25rem;margin:0.5rem 0;}
.zoy-slide p{color:var(--zoy-muted);font-size:0.875rem;}
.zoy-slide-visual{border-radius:0.625rem;border:1px solid var(--zoy-line);background:rgba(59,130,246,0.05);padding:1rem;font-family:var(--zoy-font-m);font-size:0.75rem;color:#c8d1f0;min-height:8.125rem;}
.zoy-slide-visual .ai-line{color:var(--zoy-blue);}
.zoy-slide-visual .out-line{color:var(--zoy-muted);}
.zoy-slider-controls{display:flex;align-items:center;justify-content:center;gap:0.875rem;margin-top:1rem;}
.zoy-slider-arrow{width:2.25rem;height:2.25rem;border-radius:50%;border:1px solid var(--zoy-line);background:var(--zoy-panel);display:flex;align-items:center;justify-content:center;color:var(--zoy-text);font-size:1.125rem;}
.zoy-slider-arrow:hover{border-color:var(--zoy-blue);}
.zoy-slider-dots{display:flex;gap:0.375rem;}
.zoy-slider-dot{width:0.4375rem;height:0.4375rem;border-radius:50%;background:var(--zoy-line);border:none;transition:.2s;}
.zoy-slider-dot.active{width:1.25rem;border-radius:0.3125rem;background:var(--zoy-grad);}

.zoy-flow{display:grid;grid-template-columns:repeat(4,1fr);gap:0.875rem;}
.zoy-flow-step{background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:var(--zoy-radius);padding:1.25rem;}
.zoy-flow-num{font-family:var(--zoy-font-m);color:var(--zoy-blue);font-size:0.6875rem;}
.zoy-flow-step h4{font-family:var(--zoy-font-d);font-size:0.9375rem;margin:0.5rem 0 0.375rem;}
.zoy-flow-step p{color:var(--zoy-muted);font-size:0.8125rem;}
.zoy-flow-note{margin-top:1.375rem;padding:1rem 1.125rem;border-radius:var(--zoy-radius);border:1px dashed rgba(139,92,246,0.4);background:rgba(139,92,246,0.05);font-size:0.8125rem;color:var(--zoy-muted);}

.zoy-plans{display:grid;grid-template-columns:repeat(3,1fr);gap:1.125rem;}
.zoy-plan{border-radius:1rem;padding:1.5rem 1.25rem;border:1px solid var(--zoy-line);background:var(--zoy-panel);display:flex;flex-direction:column;position:relative;overflow:hidden;}
.zoy-plan .badge{font-family:var(--zoy-font-m);font-size:0.6875rem;letter-spacing:1px;text-transform:uppercase;}
.zoy-plan .name{font-family:var(--zoy-font-d);font-size:1.25rem;font-weight:700;margin:0.5rem 0 0.25rem;}
.zoy-plan .price{font-family:var(--zoy-font-d);font-size:0.875rem;color:var(--zoy-muted);margin-bottom:1rem;}
.zoy-plan ul{list-style:none;display:flex;flex-direction:column;gap:0.5rem;margin-bottom:1.125rem;flex:1;}
.zoy-plan li{font-size:0.8125rem;color:var(--zoy-muted);display:flex;gap:0.375rem;}
.zoy-plan li::before{content:'✓';color:inherit;font-family:var(--zoy-font-m);flex:none;}
.zoy-plan .quality{font-family:var(--zoy-font-m);font-size:0.6875rem;color:var(--zoy-muted2);margin-bottom:0.875rem;}
.zoy-plan .cta {
  padding: 0.625rem;
  border-radius: 0.625rem;
  text-align: center;
  font-weight: 600;
  font-size: 0.8125rem;
  border: 1px solid var(--zoy-line);
  cursor: pointer; /* <-- Tambahkan ini agar kursor berubah saat di-hover */
  width: 100%;
}
.zoy-plan.free .badge,.zoy-plan.free li::before{color:var(--zoy-green);}
.zoy-plan.free .cta{background:rgba(34,197,94,0.1);border-color:rgba(34,197,94,0.35);color:#86efac;}
.zoy-plan.pro{border-color:rgba(59,130,246,0.4);}
.zoy-plan.pro .badge,.zoy-plan.pro li::before{color:var(--zoy-blue);}
.zoy-plan.pro .cta{background:rgba(59,130,246,0.12);border-color:rgba(59,130,246,0.4);color:#93c5fd;}
.zoy-plan.premium{border-color:rgba(168,85,247,0.55);background:linear-gradient(180deg,rgba(139,92,246,0.1),var(--zoy-panel));box-shadow:0 0 55px rgba(168,85,247,0.28);}
.zoy-plan.premium .badge,.zoy-plan.premium li::before{color:var(--zoy-purple);}
.zoy-plan.premium .cta{background:var(--zoy-grad);color:#fff;border:none;}
.zoy-plan.premium::before{content:'';position:absolute;top:-40%;right:-30%;width:200px;height:200px;border-radius:50%;background:var(--zoy-purple);filter:blur(70px);opacity:0.3;}
.zoy-plans-note{text-align:center;color:var(--zoy-muted2);font-size:0.75rem;margin-top:1.125rem;}

.zoy-explore{display:grid;grid-template-columns:repeat(4,1fr);gap:0.75rem;}
.zoy-explore-card{position:relative;border-radius:0.75rem;border:1px solid var(--zoy-line);overflow:hidden;background:var(--zoy-panel);min-height:7.5rem;display:flex;flex-direction:column;justify-content:flex-end;padding:1rem;transition:all .3s;cursor:pointer;}
.zoy-explore-card:hover{transform:translateY(-0.25rem);border-color:var(--zoy-violet);}
.zoy-explore-card .card-bg{position:absolute;inset:0;background:var(--zoy-grad-soft);opacity:0.4;z-index:1;}
.zoy-explore-card .card-bg img{width:100%;height:100%;object-fit:cover;opacity:0.3;}
.zoy-explore-card .card-content{position:relative;z-index:2;display:flex;align-items:center;gap:0.625rem;}
.zoy-explore-card .card-content .icon{font-size:1.5rem;}
.zoy-explore-card .card-content span{font-family:var(--zoy-font-d);font-size:0.875rem;font-weight:600;}

.zoy-footer{border-top:1px solid var(--zoy-line);padding:2.25rem 1.5rem;}
.zoy-footer-inner{max-width:1120px;margin:0 auto;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:0.875rem;}
.zoy-footer-social{display:flex;gap:0.625rem;}
.zoy-footer-social a{width:2.125rem;height:2.125rem;border-radius:50%;border:1px solid var(--zoy-line);display:flex;align-items:center;justify-content:center;font-size:0.875rem;transition:all .3s;}
.zoy-footer-social a:hover{border-color:var(--zoy-violet);background:rgba(139,92,246,0.1);}
.zoy-footer-legal{color:var(--zoy-muted2);font-size:0.75rem;}
.zoy-footer-legal a{color:var(--zoy-violet);}
.zoy-footer-legal a:hover{text-decoration:underline;}

.zoy-app{display:none;position:fixed;inset:0;z-index:40;background:var(--zoy-bg);}
.zoy-app.active{display:flex;}
.zoy-sidebar{width:260px;flex:none;background:var(--zoy-navy);border-right:1px solid var(--zoy-line);display:flex;flex-direction:column;transition:width .25s ease;overflow:hidden;}
.zoy-sidebar.collapsed{width:72px;}
.zoy-sb-top{display:flex;align-items:center;justify-content:space-between;padding:0.875rem 1rem;border-bottom:1px solid var(--zoy-line);}
.zoy-sb-brand{display:flex;align-items:center;gap:0.5rem;font-family:var(--zoy-font-d);font-weight:700;font-size:0.875rem;white-space:nowrap;}
.zoy-sb-brand img{height:1.375rem;width:auto;border-radius:0.375rem;}
.zoy-sb-collapse{background:none;border:1px solid var(--zoy-line);border-radius:0.4375rem;padding:0.3125rem;color:var(--zoy-muted);font-size:0.75rem;}
.zoy-sb-new{margin:0.75rem;padding:0.625rem;border-radius:0.625rem;border:1px solid rgba(139,92,246,0.4);background:var(--zoy-grad-soft);color:#fff;font-weight:600;font-size:0.8125rem;display:flex;align-items:center;gap:0.375rem;white-space:nowrap;}
.zoy-sb-nav{display:flex;flex-direction:column;gap:0.125rem;padding:0 0.625rem;flex:1;overflow-y:auto;}
.zoy-sb-item{display:flex;align-items:center;gap:0.625rem;padding:0.5625rem 0.75rem;border-radius:0.5625rem;color:var(--zoy-muted);font-size:0.8125rem;font-weight:500;background:none;border:none;text-align:left;white-space:nowrap;}
.zoy-sb-item:hover{background:rgba(255,255,255,0.04);color:var(--zoy-text);}
.zoy-sb-item.active{background:rgba(59,130,246,0.14);color:#93c5fd;}
.zoy-sb-divider{height:1px;background:var(--zoy-line);margin:0.5rem 0.75rem;}
.zoy-sb-history{padding:0 0.75rem;display:flex;flex-direction:column;gap:0.125rem;max-height:140px;overflow-y:auto;}
.zoy-sb-history a{display:block;padding:0.375rem 0.625rem;border-radius:0.4375rem;font-size:0.75rem;color:var(--zoy-muted2);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;}
.zoy-sb-history a:hover{background:rgba(255,255,255,0.04);color:var(--zoy-muted);}
.zoy-sb-bottom{padding:0.75rem;border-top:1px solid var(--zoy-line);}
.zoy-token{display:flex;align-items:center;justify-content:space-between;padding:0.5rem 0.75rem;border-radius:0.625rem;background:rgba(59,130,246,0.08);border:1px solid var(--zoy-line);font-size:0.75rem;white-space:nowrap;}
.zoy-token .label{color:var(--zoy-muted);}
.zoy-token .val{font-family:var(--zoy-font-m);font-weight:600;color:var(--zoy-blue);}
.zoy-token .reset{font-size:0.625rem;color:var(--zoy-muted2);}
.zoy-sb-exit{margin-top:0.5rem;display:flex;align-items:center;gap:0.5rem;padding:0.5rem 0.75rem;border-radius:0.5625rem;color:var(--zoy-muted2);font-size:0.75rem;background:none;border:none;white-space:nowrap;}
.zoy-sb-exit:hover{color:var(--zoy-text);}

.zoy-main{flex:1;display:flex;flex-direction:column;min-width:0;position:relative;}
.zoy-topbar{display:flex;align-items:center;justify-content:space-between;padding:0.75rem 1.25rem;border-bottom:1px solid var(--zoy-line);background:rgba(5,7,12,0.7);backdrop-filter:blur(10px);}
.zoy-topbar h2{font-family:var(--zoy-font-d);font-size:0.9375rem;}
.zoy-topbar .sub{color:var(--zoy-muted2);font-size:0.6875rem;margin-top:0.125rem;}
.zoy-view{flex:1;overflow-y:auto;display:none;}
.zoy-view.active{display:flex;flex-direction:column;}

.zoy-chat-scroll{flex:1;overflow-y:auto;padding:1.5rem 0;}
.zoy-chat-inner{max-width:800px;margin:0 auto;padding:0 1.25rem;display:flex;flex-direction:column;gap:1rem;}
.zoy-msg{display:flex;gap:0.625rem;max-width:100%;}
.zoy-msg .avatar {
  flex: none;
  width: 1.75rem;
  height: 1.75rem;
  border-radius: 0.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.6875rem;
  overflow: hidden; /* <-- Agar foto melingkar/kotak rapi dan tidak bocor keluar */
}
.zoy-msg.user .avatar{background:rgba(255,255,255,0.06);color:var(--zoy-text);}
.zoy-msg.ai .avatar{background:var(--zoy-grad);box-shadow:0 0 12px rgba(139,92,246,0.5);color:#fff;}
/* Styling dasar bubble pesan */
.zoy-msg .bubble {
  background: var(--zoy-panel);
  border: 1px solid var(--zoy-line);
  border-radius: 0.75rem;
  padding: 0.75rem 1rem;
  font-size: 0.8125rem;
  line-height: 1.5;
  max-width: 600px;
  word-break: break-word;
}

/* Mengatur spasi elemen markdown di dalam balasan pesan */
.zoy-msg .bubble p {
  margin-bottom: 0.5rem;
}
.zoy-msg .bubble p:last-child {
  margin-bottom: 0;
}
.zoy-msg .bubble ul, 
.zoy-msg .bubble ol {
  margin: 0.375rem 0 0.5rem 1.25rem;
  padding-left: 0.5rem;
}
.zoy-msg .bubble li {
  margin-bottom: 0.25rem;
}
.katex-display {
  margin: 0.5em 0 !important;
}

.zoy-msg.user .bubble{background:rgba(59,130,246,0.1);border-color:rgba(59,130,246,0.25);}
.zoy-typing{display:inline-flex;gap:0.25rem;padding:0.375rem 0;}
.zoy-typing span{width:0.3125rem;height:0.3125rem;border-radius:50%;background:var(--zoy-muted);animation:zoy-blink 1.2s infinite;}
.zoy-typing span:nth-child(2){animation-delay:.2s;}
.zoy-typing span:nth-child(3){animation-delay:.4s;}
@keyframes zoy-blink{0%,80%,100%{opacity:.25;}40%{opacity:1;}}
.zoy-chat-empty{margin:auto;text-align:center;max-width:460px;padding:2.25rem;}
.zoy-chat-empty h3{font-family:var(--zoy-font-d);font-size:1.1875rem;margin-bottom:0.375rem;}
.zoy-chat-empty p{color:var(--zoy-muted);font-size:0.8125rem;margin-bottom:1rem;}
.zoy-suggest{display:flex;flex-wrap:wrap;gap:0.375rem;justify-content:center;}
.zoy-suggest-chip{padding:0.4375rem 0.75rem;border-radius:0.5625rem;border:1px solid var(--zoy-line);background:var(--zoy-panel);font-size:0.75rem;color:var(--zoy-muted);}
.zoy-suggest-chip:hover{border-color:var(--zoy-blue);color:var(--zoy-text);}
.zoy-composer{border-top:1px solid var(--zoy-line);padding:0.75rem 1.25rem 1rem;background:rgba(5,7,12,0.6);}
.zoy-composer-inner{max-width:800px;margin:0 auto;display:flex;align-items:flex-end;gap:0.625rem;background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:0.75rem;padding:0.375rem 0.375rem 0.375rem 1rem;flex-wrap:wrap;}
.zoy-composer-inner textarea{flex:1;background:none;border:none;color:var(--zoy-text);font-family:var(--zoy-font-b);font-size:0.875rem;resize:none;max-height:120px;padding:0.625rem 0;line-height:1.5;min-width:150px;}
.zoy-composer-inner textarea:focus{outline:none;}
.zoy-composer-btn{flex:none;width:2.375rem;height:2.375rem;border-radius:0.625rem;border:none;background:var(--zoy-grad);color:#fff;display:flex;align-items:center;justify-content:center;font-size:1rem;transition:all .2s;}
.zoy-composer-btn:hover{transform:scale(1.05);box-shadow:0 4px 20px rgba(139,92,246,0.4);}
.zoy-composer-btn:disabled{opacity:0.4;cursor:not-allowed;transform:none;box-shadow:none;}
.zoy-composer-toolbar{max-width:800px;margin:0.5rem auto 0;display:flex;justify-content:space-between;align-items:center;}
.zoy-toolbar-left{display:flex;gap:0.375rem;flex-wrap:wrap;}
.zoy-toolbar-btn{display:flex;align-items:center;gap:0.25rem;padding:0.3125rem 0.625rem;border-radius:0.5rem;border:1px solid transparent;background:rgba(255,255,255,0.03);color:var(--zoy-muted);font-size:0.75rem;cursor:pointer;transition:all .2s;}
.zoy-toolbar-btn:hover{background:rgba(255,255,255,0.06);color:var(--zoy-text);border-color:var(--zoy-line);}
.zoy-toolbar-btn svg{width:1rem;height:1rem;}
.zoy-token-badge{font-size:0.75rem;font-family:var(--zoy-font-m);color:var(--zoy-muted2);background:rgba(255,255,255,0.03);padding:0.25rem 0.75rem;border-radius:0.75rem;border:1px solid var(--zoy-line);}
.zoy-composer-note{text-align:center;font-size:0.6875rem;color:var(--zoy-muted2);margin-top:0.375rem;}
.zoy-attachment-list{max-width:800px;margin:0.25rem auto 0;display:flex;flex-wrap:wrap;gap:0.375rem;}
.zoy-attachment{display:inline-flex;align-items:center;gap:0.375rem;background:rgba(59,130,246,0.08);border:1px solid var(--zoy-line);border-radius:0.5rem;padding:0.25rem 0.625rem 0.25rem 0.5rem;font-size:0.75rem;color:var(--zoy-text);}
.zoy-attachment .remove{cursor:pointer;color:var(--zoy-muted2);font-size:0.875rem;transition:color .2s;}
.zoy-attachment .remove:hover{color:var(--zoy-red);}
.zoy-file-preview{max-width:100%;max-height:200px;border-radius:0.5rem;border:1px solid var(--zoy-line);margin:0.5rem 0;}

.zoy-calc-view{padding:1.25rem;overflow-y:auto;}
.zoy-calc-toolbar{display:flex;justify-content:space-between;align-items:center;margin-bottom:0.875rem;flex-wrap:wrap;gap:0.5rem;}
.zoy-calc-toolbar h3{font-family:var(--zoy-font-d);font-size:1rem;}
.zoy-btn-sm{padding:0.5rem 0.875rem;border-radius:0.5625rem;font-size:0.75rem;font-weight:600;transition:all .2s;}
.zoy-btn-sm.primary{background:var(--zoy-grad);color:#fff;border:none;}
.zoy-btn-sm.ghost{background:none;border:1px solid var(--zoy-line);color:var(--zoy-muted);}
.zoy-btn-sm:hover{transform:translateY(-0.0625rem);}
.zoy-table-wrap{overflow-x:auto;border:1px solid var(--zoy-line);border-radius:0.75rem;}
.zoy-rab-table{width:100%;border-collapse:collapse;font-size:0.75rem;min-width:960px;}
.zoy-rab-table th{background:var(--zoy-panel2);color:var(--zoy-muted);font-weight:600;text-align:left;padding:0.5rem;font-family:var(--zoy-font-m);font-size:0.625rem;text-transform:uppercase;letter-spacing:0.4px;border-bottom:1px solid var(--zoy-line);}
.zoy-rab-table td{padding:0.3125rem 0.5rem;border-bottom:1px solid var(--zoy-line);}
.zoy-rab-table input,.zoy-rab-table select{width:100%;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:0.375rem;color:var(--zoy-text);padding:0.3125rem 0.375rem;font-size:0.75rem;font-family:inherit;}
.zoy-rab-table input:focus,.zoy-rab-table select:focus{border-color:var(--zoy-blue);outline:none;}
.zoy-rab-total{font-family:var(--zoy-font-m);color:var(--zoy-blue);text-align:right;white-space:nowrap;}
.zoy-row-del{background:none;border:none;color:var(--zoy-muted2);padding:0.25rem;font-size:0.875rem;transition:color .2s;}
.zoy-row-del:hover{color:var(--zoy-red);}
.zoy-rab-summary{display:grid;grid-template-columns:repeat(4,1fr);gap:0.625rem;margin-top:0.875rem;}
.zoy-sum-card{background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:0.6875rem;padding:0.75rem 0.875rem;}
.zoy-sum-card .lbl{font-size:0.625rem;color:var(--zoy-muted2);font-family:var(--zoy-font-m);text-transform:uppercase;}
.zoy-sum-card .val{font-family:var(--zoy-font-m);font-size:1rem;margin-top:0.25rem;}
.zoy-sum-card.grand{border-color:rgba(139,92,246,0.5);background:linear-gradient(160deg,rgba(139,92,246,0.12),var(--zoy-panel));}
.zoy-sum-card.grand .val{color:var(--zoy-violet);font-weight:600;}
.zoy-rate-row{display:flex;align-items:center;gap:0.375rem;margin-top:0.75rem;}
.zoy-rate-row label{font-size:0.6875rem;color:var(--zoy-muted);font-family:var(--zoy-font-m);}
.zoy-rate-row input{width:60px;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:0.375rem;color:var(--zoy-text);padding:0.25rem 0.375rem;font-size:0.75rem;}

.zoy-cost-detail{margin-top:1rem;border:1px solid var(--zoy-line);border-radius:0.75rem;overflow:hidden;}
.zoy-cost-detail table{width:100%;border-collapse:collapse;font-size:0.75rem;}
.zoy-cost-detail th{background:var(--zoy-panel2);color:var(--zoy-muted);font-weight:600;text-align:left;padding:0.5rem;font-family:var(--zoy-font-m);font-size:0.625rem;text-transform:uppercase;letter-spacing:0.4px;border-bottom:1px solid var(--zoy-line);}
.zoy-cost-detail td{padding:0.375rem 0.5rem;border-bottom:1px solid var(--zoy-line);}
.zoy-cost-detail .total-row td{font-weight:600;color:var(--zoy-blue);}

.zoy-calc-form{display:grid;grid-template-columns:repeat(2,1fr);gap:0.75rem;max-width:600px;}
.zoy-field{display:flex;flex-direction:column;gap:0.25rem;}
.zoy-field label{font-size:0.6875rem;color:var(--zoy-muted);font-family:var(--zoy-font-m);}
.zoy-field select,.zoy-field input{background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:0.5625rem;color:var(--zoy-text);padding:0.5rem 0.625rem;font-size:0.8125rem;font-family:inherit;}
.zoy-field select:focus,.zoy-field input:focus{border-color:var(--zoy-blue);outline:none;}
.zoy-calc-result{margin-top:1.25rem;padding:1rem 1.25rem;border-radius:0.75rem;border:1px solid rgba(59,130,246,0.35);background:rgba(59,130,246,0.06);display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:0.625rem;max-width:600px;}
.zoy-calc-result .r-label{font-size:0.75rem;color:var(--zoy-muted);}
.zoy-calc-result .r-val{font-family:var(--zoy-font-m);font-size:1.25rem;color:var(--zoy-blue);font-weight:600;}

.zoy-calc-btn{padding:0.5rem 0.25rem;border-radius:0.375rem;border:1px solid var(--zoy-line);background:var(--zoy-panel);color:var(--zoy-text);font-family:var(--zoy-font-m);font-size:0.8125rem;font-weight:500;transition:all .15s;text-align:center;min-height:2.25rem;}
.zoy-calc-btn:hover{background:rgba(59,130,246,0.1);border-color:var(--zoy-blue);transform:scale(1.02);}
.zoy-calc-btn:active{transform:scale(0.95);}
.zoy-calc-btn[data-action="equals"]{background:var(--zoy-grad);color:#fff;border:none;}
.zoy-calc-btn[data-action="clear"],.zoy-calc-btn[data-action="backspace"]{color:var(--zoy-red);}

.zoy-history-list{display:flex;flex-direction:column;gap:0.375rem;max-width:720px;}
.zoy-hist-row{display:flex;align-items:center;gap:0.75rem;padding:0.75rem 0.875rem;border:1px solid var(--zoy-line);border-radius:0.6875rem;background:var(--zoy-panel);transition:background .2s;}
.zoy-hist-row:hover{background:rgba(255,255,255,0.02);}
.zoy-hist-row .icon{width:1.875rem;height:1.875rem;border-radius:0.5625rem;background:rgba(59,130,246,0.12);flex:none;display:flex;align-items:center;justify-content:center;font-size:0.875rem;}
.zoy-hist-row .meta{flex:1;min-width:0;cursor:pointer;}
.zoy-hist-row .title{font-size:0.8125rem;font-weight:600;}
.zoy-hist-row .cat{font-family:var(--zoy-font-m);font-size:0.625rem;color:var(--zoy-violet);margin-top:0.125rem;}
.zoy-hist-row .actions{display:flex;gap:0.25rem;}
.zoy-icon-btn{width:1.75rem;height:1.75rem;border-radius:0.5rem;border:1px solid var(--zoy-line);background:none;color:var(--zoy-muted);display:flex;align-items:center;justify-content:center;font-size:0.75rem;transition:all .2s;}
.zoy-icon-btn:hover{color:var(--zoy-text);border-color:var(--zoy-blue);}

.zoy-s-grid{display:grid;grid-template-columns:200px 1fr;gap:1.25rem;max-width:860px;}
.zoy-s-tabs{display:flex;flex-direction:column;gap:0.125rem;}
.zoy-s-tab{text-align:left;padding:0.5rem 0.75rem;border-radius:0.5625rem;background:none;border:none;color:var(--zoy-muted);font-size:0.8125rem;transition:all .2s;}
.zoy-s-tab:hover{background:rgba(255,255,255,0.04);}
.zoy-s-tab.active{background:rgba(59,130,246,0.14);color:#93c5fd;}
.zoy-s-panel{display:flex;flex-direction:column;gap:0.875rem;}
.zoy-s-panel h4{font-family:var(--zoy-font-d);font-size:0.875rem;margin-bottom:0.125rem;}
.zoy-saved{font-size:0.6875rem;color:var(--zoy-green);display:none;}
.zoy-saved.show{display:block;}

.zoy-guest{position:fixed;bottom:1.25rem;left:50%;transform:translateX(-50%) translateY(1.25rem);opacity:0;pointer-events:none;transition:.3s;z-index:80;background:var(--zoy-panel);border:1px solid rgba(139,92,246,0.5);box-shadow:var(--zoy-shadow);border-radius:0.875rem;padding:0.875rem 1.125rem;display:flex;align-items:center;gap:0.875rem;max-width:400px;}
.zoy-guest.show{opacity:1;transform:translateX(-50%) translateY(0);pointer-events:auto;}
.zoy-guest p{font-size:0.75rem;color:var(--zoy-muted);flex:1;}
.zoy-guest strong{display:block;color:var(--zoy-text);font-size:0.8125rem;margin-bottom:0.125rem;}

.zoy-modal{position:fixed;inset:0;background:rgba(2,3,8,0.72);backdrop-filter:blur(6px);z-index:100;display:none;align-items:center;justify-content:center;padding:1.25rem;}
.zoy-modal.show{display:flex;}
.zoy-modal-box{width:100%;max-width:420px;background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:1rem;padding:1.5rem;box-shadow:var(--zoy-shadow);position:relative;}
.zoy-modal-box h3{font-family:var(--zoy-font-d);font-size:1.125rem;margin-bottom:0.25rem;}
.zoy-modal-box .sub{color:var(--zoy-muted);font-size:0.75rem;margin-bottom:1rem;}
.zoy-modal-close{position:absolute;top:0.875rem;right:0.875rem;background:none;border:none;color:var(--zoy-muted);font-size:1.125rem;cursor:pointer;}
.zoy-modal-close:hover{color:var(--zoy-text);}
.zoy-oauth-btn {
  width: 100%;
  padding: 0.625rem 1rem;
  border-radius: 0.625rem;
  border: 1px solid var(--zoy-line);
  background: rgba(255, 255, 255, 0.03);
  color: var(--zoy-text);
  font-size: 0.8125rem;
  font-weight: 500;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.75rem;
  margin-bottom: 0.5rem;
  transition: all 0.2s ease;
  cursor: pointer;
}

.zoy-oauth-btn:hover {
  background: rgba(255, 255, 255, 0.08);
  border-color: var(--zoy-blue);
  transform: translateY(-1px);
}

.zoy-divider{display:flex;align-items:center;gap:0.5rem;margin:0.875rem 0;color:var(--zoy-muted2);font-size:0.6875rem;}
.zoy-divider::before,.zoy-divider::after{content:'';flex:1;height:1px;background:var(--zoy-line);}
.zoy-modal-box input{width:100%;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:0.625rem;color:var(--zoy-text);padding:0.625rem 0.75rem;font-size:0.8125rem;margin-bottom:0.5rem;}
.zoy-modal-box input:focus{outline:none;border-color:var(--zoy-blue);}
.zoy-otp{display:flex;gap:0.375rem;margin-bottom:0.75rem;}
.zoy-otp input{text-align:center;font-family:var(--zoy-font-m);font-size:0.9375rem;margin-bottom:0;width:50px;}
.zoy-auth-toggle{color:var(--zoy-blue);cursor:pointer;font-size:0.75rem;text-align:center;margin-top:0.625rem;}
.zoy-auth-toggle:hover{text-decoration:underline;}

.zoy-popup-overlay{position:fixed;inset:0;background:rgba(0,0,0,0.7);backdrop-filter:blur(8px);z-index:9999;display:none;align-items:center;justify-content:center;padding:1.25rem;animation:zoyFadeIn .3s ease;}
.zoy-popup-overlay.show{display:flex;}
@keyframes zoyFadeIn{from{opacity:0;transform:scale(0.95);}to{opacity:1;transform:scale(1);}}
.zoy-popup{background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:1.25rem;padding:2.5rem 2.25rem 2rem;max-width:420px;width:100%;text-align:center;box-shadow:0 20px 60px rgba(0,0,0,0.5);position:relative;overflow:hidden;}
.zoy-popup::before{content:'';position:absolute;top:-50%;right:-50%;width:200px;height:200px;background:var(--zoy-purple);filter:blur(100px);opacity:0.2;border-radius:50%;}
.zoy-popup-icon{font-size:3.5rem;margin-bottom:0.75rem;}
.zoy-popup-title{font-family:var(--zoy-font-d);font-size:1.375rem;font-weight:700;color:var(--zoy-text);margin-bottom:0.5rem;}
.zoy-popup-desc{font-size:0.875rem;color:var(--zoy-muted);line-height:1.6;margin-bottom:1rem;}
.zoy-popup-desc strong{color:var(--zoy-yellow);}
.zoy-popup-timer{background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:0.75rem;padding:0.75rem 1rem;margin-bottom:1.25rem;}
.zoy-popup-timer #zoyPopupCountdown{font-family:var(--zoy-font-m);font-size:1.75rem;font-weight:700;color:var(--zoy-blue);letter-spacing:2px;}
.zoy-popup-actions{display:flex;gap:0.625rem;flex-wrap:wrap;justify-content:center;}
.zoy-popup-actions .zoy-btn{flex:1;min-width:120px;padding:0.75rem 1.25rem;font-size:0.875rem;}
.zoy-popup-note{font-size:0.75rem;color:var(--zoy-muted2);margin-top:0.875rem;padding-top:0.875rem;border-top:1px solid var(--zoy-line);}

@keyframes slideInRight{from{opacity:0;transform:translateX(100px);}to{opacity:1;transform:translateX(0);}}
.zoy-notification{position:fixed;top:1.25rem;right:1.25rem;background:var(--zoy-panel);border-left:4px solid var(--zoy-blue);padding:0.75rem 1.25rem;border-radius:0.625rem;color:var(--zoy-text);font-size:0.8125rem;z-index:9999;box-shadow:0 4px 20px rgba(0,0,0,0.3);animation:slideInRight .3s ease;max-width:400px;border:1px solid var(--zoy-line);}

@media (max-width:980px){.zoy-nav-links{display:none;}.zoy-nav-menu{display:flex;}.zoy-flow,.zoy-plans,.zoy-explore{grid-template-columns:repeat(2,1fr);}.zoy-slide{grid-template-columns:1fr;}}
@media (max-width:640px){.zoy-sidebar{position:fixed;z-index:60;height:100%;}.zoy-sidebar:not(.mobile-open){display:none;}.zoy-flow,.zoy-plans,.zoy-explore{grid-template-columns:1fr;}.zoy-rab-summary{grid-template-columns:1fr 1fr;}.zoy-s-grid{grid-template-columns:1fr;}.zoy-calc-form{grid-template-columns:1fr;}.zoy-dropdown{min-width:220px;right:-10px;}.zoy-popup{padding:30px 20px 24px;}.zoy-popup-timer #zoyPopupCountdown{font-size:22px;}}
.zoy-hide-mobile{display:none;}@media (max-width:640px){.zoy-hide-mobile{display:flex;}}
</style>
</head>

<body>

<div class="zoy-bg-grid"></div>
<div class="zoy-glow a"></div>
<div class="zoy-glow b"></div>
<div class="zoy-glow c"></div>

<!-- ============================================================
   NAVIGATION
   ============================================================ -->
<header class="zoy-nav">
  <a href="/" class="zoy-brand" onclick="if(document.getElementById('zoyApp').classList.contains('active')){closeApp();}else{window.scrollTo({top:0,behavior:'smooth'});}return false;">
<span class="zoy-brand-mark">
  <img src="https://i.ibb.co.com/VZnFKkh/image.jpg" alt="Zoy AI Logo" style="width:100%;height:100%;object-fit:cover;">
</span>
    <span class="brand-text">Zoy AI</span>
  </a>
  <nav class="zoy-nav-links">
    @foreach($navLinks as $link)
      <a href="{{ $link['url'] }}"><span>{{ $link['icon'] }}</span> {{ $link['name'] }}</a>
    @endforeach
  </nav>
  <div style="display:flex;align-items:center;gap:10px;">
    <button class="zoy-nav-cta" id="zoyTryBtn">{{ __('Coba Zoy AI') }}</button>
    <div style="position:relative;display:inline-block;">
      <button class="zoy-nav-menu" id="zoyMenuBtn">☰</button>
      <nav class="zoy-dropdown" id="zoyDropdown">
        <p class="zoy-dropdown-section">Calculators</p>
<button class="zoy-dropdown-item" data-view="rab">RAB Calculator <span class="shortcut">Estimate</span></button>
<button class="zoy-dropdown-item" data-view="volume">Volume Calculator <span class="shortcut">m³, m²</span></button>
<button class="zoy-dropdown-item" data-view="material">Material + MASPETRUK <span class="shortcut">Price</span></button>
<button class="zoy-dropdown-item" data-view="scientific">Scientific Calculator <span class="shortcut">sin, cos, tan</span></button>
<button class="zoy-dropdown-item" data-view="cost">Cost Estimation <span class="shortcut">Budget</span></button>
        <div class="zoy-dropdown-divider"></div>
        <p class="zoy-dropdown-section">◈ Data & History</p>
        <button class="zoy-dropdown-item" data-view="projects"><span>▣</span> Projects <span class="shortcut">Manage</span></button>
        <button class="zoy-dropdown-item" data-view="history"><span>◈</span> History <span class="shortcut">Records</span></button>
        <div class="zoy-dropdown-divider"></div>
        <p class="zoy-dropdown-section">◈ Account</p>
        <button class="zoy-dropdown-item" id="zoyDropdownLogin"><span>⊞</span> Login / Register <span class="shortcut">Account</span></button>
        <button class="zoy-dropdown-item" data-view="s">Settings <span class="shortcut">Preferences</span></button>
        <div class="zoy-dropdown-divider"></div>
        <div style="padding:8px 16px;">
          <div class="zoy-token" style="margin:0;">
            <span class="label" id="zoyTkLabelDrop">Free plan</span>
            <span class="val" id="zoyTkValDrop">5/5</span>
            <span class="reset" id="zoyTkResetDrop">⟳4h</span>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>

<!-- ============================================================
   LANDING PAGE
   ============================================================ -->
<section class="zoy-hero" id="zoyLandingHero">
  <div class="zoy-eyebrow zoy-reveal"><span class="dot"></span> Built for RAB &amp; civil engineering</div>
  <h1 class="zoy-reveal">{{ __('AI untuk konstruksi.') }}<br><span class="grad">{{ __('Estimasi, hitung, bangun.') }}</span></h1>
  <p class="zoy-reveal">Zoy AI helps contractors, consultants, engineers, and students prepare RAB, calculate volume, estimate material needs, and structure project costs.</p>
  <div class="zoy-hero-actions zoy-reveal">
    <button class="zoy-btn zoy-btn-primary" id="zoyTryBtn2">Try Zoy AI RAB</button>
    <a href="#how-it-works" class="zoy-btn zoy-btn-ghost">See how it works</a>
  </div>
  <p class="zoy-hero-note zoy-reveal">No account needed — try it as a guest first.</p>
</section>

<!-- ============================================================
   FEATURES
   ============================================================ -->
<section class="zoy-section" id="features">
  <div class="zoy-section-head zoy-reveal">
    <hgroup>
      <p class="zoy-section-tag">Zoy AI Capabilities</p>
      <h2 class="zoy-section-title">What Zoy AI can help with</h2>
      <p class="zoy-section-desc">Real examples of Zoy AI in action.</p>
    </hgroup>
  </div>
  <div class="zoy-slider-wrap zoy-reveal">
    <div class="zoy-slider-track">
      <div class="zoy-slider-inner" id="zoySliderInner"></div>
    </div>
    <div class="zoy-slider-controls">
      <button class="zoy-slider-arrow" id="zoySlidePrev">‹</button>
      <div class="zoy-slider-dots" id="zoySliderDots"></div>
      <button class="zoy-slider-arrow" id="zoySlideNext">›</button>
    </div>
  </div>
</section>

<!-- ============================================================
   HOW IT WORKS
   ============================================================ -->
<section class="zoy-section" id="how-it-works">
  <div class="zoy-section-head zoy-reveal">
    <hgroup>
      <p class="zoy-section-tag">Zoy AI Process</p>
      <h2 class="zoy-section-title">From your input to a structured answer</h2>
    </hgroup>
  </div>
  <div class="zoy-flow zoy-reveal">
    <article class="zoy-flow-step"><p class="zoy-flow-num">Step 1</p><h4>You describe</h4><p>Question, project detail, or numbers for calculation.</p></article>
    <article class="zoy-flow-step"><p class="zoy-flow-num">Step 2</p><h4>Zoy AI interprets</h4><p>Parses RAB, volume, material, or general help.</p></article>
    <article class="zoy-flow-step"><p class="zoy-flow-num">Step 3</p><h4>AI + logic</h4><p>Language understanding combined with calculation logic.</p></article>
    <article class="zoy-flow-step"><p class="zoy-flow-num">Step 4</p><h4>Structured answer</h4><p>Clear breakdown — tables, totals, and explanations.</p></article>
  </div>
  <p class="zoy-flow-note zoy-reveal">Zoy AI is being prepared to reference official construction data such as <strong>MASPETRUK Jawa Tengah</strong>.</p>
</section>

<!-- ============================================================
   PRICING (ENTERPRISE GRADE & BUSINESS STANDARDS)
   ============================================================ -->
<section class="zoy-section" id="pricing">
  <div class="zoy-section-head zoy-reveal">
    <hgroup>
      <p class="zoy-section-tag">Zoy AI Plans</p>
      <h2 class="zoy-section-title">Choose Your Construction & Design AI Plan</h2>
      <p class="zoy-section-desc">Access advanced AI engines for RAB estimation, material takeoff, and 3D architectural rendering.</p>
    </hgroup>
  </div>
  <div class="zoy-plans">
    
    <!-- FREE PLAN -->
    <article class="zoy-plan free zoy-reveal">
      <p class="badge">Starter Plan</p>
      <h3 class="name">Free</h3>
      <p class="price">$0 / month</p>
      <p style="font-size:12px;color:var(--zoy-muted2);margin-top:-10px;">$0 billed annually</p>
      <p class="quality">Basic model for lightweight calculations and basic tasks</p>
      <ul>
        <li>20 AI Tokens / 4 Hours</li>
        <li>Standard RAB &amp; Volume Calculators</li>
        <li>AI Image Rendering (2 credits / day, 720p max)</li>
        <li>Up to 3 Active Projects</li>
        <li>Document Analysis (5MB max file size)</li>
        <li style="color:var(--zoy-muted2);font-size:11px;">✕ No Zoy AI Turbo Access</li>
      </ul>
      <button class="cta" onclick="zoyUpgradePlan('free')">Start Free</button>
    </article>

    <!-- PROFESSIONAL PLAN -->
    <article class="zoy-plan pro zoy-reveal">
      <p class="badge">Professional Plan</p>
      <h3 class="name">Pro</h3>
      <p class="price">$89 / month</p>
      <p style="font-size:12px;color:var(--zoy-muted2);margin-top:-10px;">$828 / year ($69/mo billed annually)</p>
      <p class="quality">Designed for Contractors, Architects &amp; Civil Engineers</p>
      <ul>
        <li><strong>500 AI Tokens / 24 Hours</strong> (Auto Renewal)</li>
        <li>Advanced RAB &amp; Official Unit Price Analysis</li>
        <li><strong>AI Architectural 3D Rendering</strong> (150 renders / month, 2K HD)</li>
        <li>Blueprint, CAD &amp; PDF Data Extraction</li>
        <li>Up to 50 Active Projects (100MB file limit)</li>
        <li style="color:var(--zoy-blue);font-weight:600;">✓ Powered by Zoy AI Pro Engine</li>
      </ul>
      <button class="cta" style="background:var(--zoy-blue);color:#fff;border:none;" onclick="zoyUpgradePlan('pro')">Upgrade to Pro</button>
    </article>

    <!-- BUSINESS & ENTERPRISE PLAN -->
    <article class="zoy-plan premium zoy-reveal">
      <p class="badge">Studio &amp; Business</p>
      <h3 class="name">Premium Max</h3>
      <p class="price">$299 / month</p>
      <p style="font-size:12px;color:var(--zoy-muted2);margin-top:-10px;">$2,868 / year ($239/mo billed annually)</p>
      <p class="quality">Ultra performance for Architecture Studios &amp; Business Enterprises</p>
      <ul>
        <li><strong>Unlimited AI Tokens</strong> (Maximum Speed &amp; Priority Queue)</li>
        <li>Unlimited RAB, Structural Analysis &amp; Auto Costing</li>
        <li><strong>Unlimited Photorealistic 4K AI Rendering</strong></li>
        <li>Auto Vision Parsing: Drawings &amp; Blueprints to RAB</li>
        <li>Unlimited Active Projects &amp; Unlimited File Storage</li>
        <li>Export PDF &amp; Excel Reports with Custom Business Logo</li>
        <li style="color:var(--zoy-purple);font-weight:600;">✓ Full Zoy AI Max Engine Unlimited</li>
        <li style="color:var(--zoy-muted2);font-size:11px;">◇ Dedicated Server Priority &amp; Business API Access</li>
      </ul>
      <button class="cta" onclick="zoyUpgradePlan('premium')">Get Premium Max</button>
    </article>

  </div>
  <p class="zoy-plans-note zoy-reveal">
    * AI Visualization supports text-to-architecture rendering, facade &amp; interior redesign, and drawing enhancements.<br>
    <strong>Save up to 20% on annual billing. Encrypted data security included on all plans.</strong>
  </p>
</section>
  
<!-- ============================================================
   EXPLORE
   ============================================================ -->
<section class="zoy-section" id="products">
  <div class="zoy-section-head zoy-reveal">
    <hgroup>
      <p class="zoy-section-tag">Zoy AI Ecosystem</p>
      <h2 class="zoy-section-title">Zoy AI, beyond the chat</h2>
      <p class="zoy-section-desc">Explore our company, research, products, and more.</p>
    </hgroup>
  </div>
  <nav class="zoy-explore zoy-reveal">
    @foreach($exploreLinks as $link)
      <a class="zoy-explore-card" href="{{ $link['url'] }}" target="_blank" style="border-color:{{ $link['bg'] }}33;">
        <div class="card-bg" style="background:{{ $link['bg'] }};opacity:0.1;"></div>
        <div class="card-content">
          <span class="icon">{{ $link['icon'] }}</span>
          <span>{{ $link['name'] }}</span>
        </div>
      </a>
    @endforeach
  </nav>
</section>

<!-- ============================================================
   FOOTER
   ============================================================ -->
<footer class="zoy-footer" id="foundation">
  <div class="zoy-footer-inner">
    <a href="/" class="zoy-brand" style="font-size:14px;cursor:pointer;" onclick="if(document.getElementById('zoyApp').classList.contains('active')){closeApp();}else{window.scrollTo({top:0,behavior:'smooth'});}return false;">
      <span class="zoy-brand-mark" style="width:24px;height:24px;">
        <img src="https://i.ibb.co.com/VZnFKkh/image.jpg" alt="Zoy AI Logo" style="width:100%;height:100%;object-fit:cover;">
      </span> 
      Zoy AI — AI for Construction
    </a>
       <nav class="zoy-footer-social">
      <!-- TikTok -->
      <a href="https://tiktok.com/@zoyai" target="_blank" title="TikTok">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 11-2.89-2.89c.28 0 .56.04.82.12V9.41a6.32 6.32 0 00-.82-.05A6.34 6.34 0 1015.82 15.7V8.5a8.28 8.28 0 005.22 1.84V6.89a4.85 4.85 0 01-1.45-.2z"/>
        </svg>
      </a>

      <!-- Instagram -->
      <a href="https://instagram.com/zoyai" target="_blank" title="Instagram">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
        </svg>
      </a>

      <!-- X / Twitter -->
      <a href="https://twitter.com/zoyai" target="_blank" title="X (Twitter)">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
        </svg>
      </a>

      <!-- GitHub -->
      <a href="https://github.com/ZyeeCeleste" target="_blank" title="GitHub">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
        </svg>
      </a>
    </nav>
    <p class="zoy-footer-legal">
      © 2026 <a href="https://zoyai.com" target="_blank">Zoy AI</a> by <a href="https://github.com/ZyeeCeleste" target="_blank">ZyeeCeleste</a> v{{ $zoyVersion }}
    </p>
  </div>
</footer>


<!-- ============================================================
   APP SHELL - SIDEBAR & MAIN
   ============================================================ -->
<div class="zoy-app" id="zoyApp">
  
  <aside class="zoy-sidebar" id="zoySidebar">
<div class="zoy-sb-top">
  <div class="zoy-sb-brand">
    <span class="zoy-brand-mark" style="width:22px;height:22px;">
      <img src="https://i.ibb.co.com/VZnFKkh/image.jpg" alt="Zoy AI Logo" style="width:100%;height:100%;object-fit:cover;">
    </span> 
    Zoy AI
  </div>
  <button class="zoy-sb-collapse" id="zoySbCollapse">◀</button>
</div>
<button class="zoy-sb-new" id="zoyNewChat">＋ New Chat</button>
<nav class="zoy-sb-nav">
  <button class="zoy-sb-item active" data-view="chat">Chat</button>
  <button class="zoy-sb-item" data-view="rab">RAB</button>
  <button class="zoy-sb-item" data-view="volume">Volume</button>
  <button class="zoy-sb-item" data-view="material">Material</button>
  <button class="zoy-sb-item" data-view="scientific">Scientific</button>
  <button class="zoy-sb-item" data-view="cost">Cost</button>
  <button class="zoy-sb-item" data-view="history">History</button>
  <button class="zoy-sb-item" data-view="projects">Projects</button>
  <button class="zoy-sb-item" data-view="s">Settings</button>
</nav>
    <div class="zoy-sb-history" id="zoySbHistory"></div>
    <div class="zoy-sb-bottom">
      <div class="zoy-token">
        <span class="label" id="zoyTkLabel">Free plan</span>
        <span class="val" id="zoyTkVal">5/5</span>
        <span class="reset" id="zoyTkReset">⟳4h</span>
      </div>
      <button class="zoy-sb-exit" id="zoyExitApp">← Back to Landing</button>
    </div>
  </aside>

  <main class="zoy-main">
    
    <div class="zoy-topbar">
      <div>
        <h2 id="zoyTopTitle">Chat</h2>
        <p class="sub" id="zoyTopSub">Guest — 5 free messages</p>
      </div>
    </div>

    <!-- VIEW - CHAT -->
    <section class="zoy-view active" id="zoyView-chat">
      <div class="zoy-chat-scroll" id="zoyChatScroll">
        <div class="zoy-chat-inner" id="zoyChatInner">
          <article class="zoy-chat-empty" id="zoyChatEmpty">
            <h3>◈ What are we building today?</h3>
            <p>Ask Zoy AI about RAB, material and volume calculations, cost estimation, or anything construction-related.</p>
            <nav class="zoy-suggest">
              <button class="zoy-suggest-chip" data-fill="Help me start a RAB for a 60m² house">◆ Start RAB for house</button>
              <button class="zoy-suggest-chip" data-fill="How much concrete for a 4x5m slab, 12cm thick?">◇ Concrete volume</button>
              <button class="zoy-suggest-chip" data-fill="Estimate cost for 100 concrete blocks at Rp5,000 each">Material cost</button>
              <button class="zoy-suggest-chip" data-fill="Introduce yourself, what can Zoy AI do?">◈ What is Zoy AI?</button>
            </nav>
          </article>
        </div>
      </div>
      <footer class="zoy-composer">
        <div class="zoy-composer-inner" id="zoyComposerInner">
          <textarea id="zoyComposerInput" rows="1" placeholder="Ask Zoy AI anything..."></textarea>
          <button class="zoy-composer-btn" id="zoySendBtn">➤</button>
        </div>
        <div class="zoy-composer-toolbar">
          <div class="zoy-toolbar-left">
            <button class="zoy-toolbar-btn" id="zoyAttachBtn" title="Upload file">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48"/></svg>
              <span>File</span>
            </button>
            <input type="file" id="zoyFileInput" accept=".pdf,.doc,.docx,.xls,.xlsx,.txt,.csv,.jpg,.jpeg,.png,.zip" style="display:none;" multiple>
            <button class="zoy-toolbar-btn" id="zoyCameraBtn" title="Take photo">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 01-2 2H3a2 2 0 01-2-2V8a2 2 0 012-2h4l2-3h6l2 3h4a2 2 0 012 2z"/><circle cx="12" cy="13" r="4"/></svg>
              <span>Camera</span>
            </button>
            <input type="file" id="zoyCameraInput" accept="image/*" style="display:none;" capture="environment">
            <button class="zoy-toolbar-btn" id="zoyImageBtn" title="Generate image">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
              <span>Image</span>
            </button>
            <button class="zoy-toolbar-btn" id="zoyWebBtn" title="Search web">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
              <span>Web</span>
            </button>
          </div>
          <div class="zoy-toolbar-right">
            <span class="zoy-token-badge" id="zoyTokenBadge">⚡ 5/5</span>
          </div>
        </div>
        <p class="zoy-composer-note" id="zoyAiInfo">
          Zoy AI · <span id="zoyAiService">Gemini</span> (Accuracy <span id="zoyAiAccuracy">40%</span>) · 
          <span id="zoyAiPlan">Free</span>
        </p>
        <p class="zoy-composer-note" style="font-size:10px;color:var(--zoy-muted2);margin-top:2px;">Zoy AI can make mistakes. Check important calculations before use.</p>
      </footer>
    </section>

    <!-- VIEW - RAB CALCULATOR -->
    <section class="zoy-view zoy-calc-view" id="zoyView-rab">
      <div class="zoy-calc-toolbar">
        <h3>▣ RAB Calculator</h3>
        <div style="display:flex;gap:6px;flex-wrap:wrap;">
          <button class="zoy-btn-sm ghost" id="zoyRabAdd">＋ Add Item</button>
          <button class="zoy-btn-sm primary" id="zoyRabSave">◈ Save</button>
          <button class="zoy-btn-sm ghost" onclick="zoyDownloadRabExcel()" style="color:var(--zoy-green);border-color:rgba(34,197,94,0.3);">⬇ Excel</button>
          <button class="zoy-btn-sm ghost" onclick="zoyDownloadRabPdf()" style="color:var(--zoy-red);border-color:rgba(239,68,68,0.3);">⬇ PDF</button>
          <button class="zoy-btn-sm ghost" id="zoyTranslateRabBtn" style="color:var(--zoy-violet);border-color:rgba(139,92,246,0.3);">◈ Translate</button>
        </div>
      </div>
      <div class="zoy-table-wrap">
        <table class="zoy-rab-table">
          <thead><tr><th>No</th><th>Description</th><th>Material</th><th>Volume</th><th>Unit</th><th>Qty</th><th>Price</th><th>Labor</th><th>Unit Price</th><th>Total</th><th></th></tr></thead>
          <tbody id="zoyRabBody"></tbody>
        </table>
      </div>
      <div class="zoy-rate-row">
        <label>Overhead %</label><input type="number" id="zoyRabOverhead" value="10">
        <label>Tax %</label><input type="number" id="zoyRabTax" value="11">
      </div>
      <div class="zoy-rab-summary">
        <article class="zoy-sum-card"><p class="lbl">Subtotal</p><p class="val" id="zoyRabSubtotal">Rp 0</p></article>
        <article class="zoy-sum-card"><p class="lbl">Overhead</p><p class="val" id="zoyRabOverheadVal">Rp 0</p></article>
        <article class="zoy-sum-card"><p class="lbl">Tax (PPN)</p><p class="val" id="zoyRabTaxVal">Rp 0</p></article>
        <article class="zoy-sum-card grand"><p class="lbl">Grand Total</p><p class="val" id="zoyRabGrand">Rp 0</p></article>
      </div>
    </section>

    <!-- VIEW - VOLUME CALCULATOR -->
    <section class="zoy-view zoy-calc-view" id="zoyView-volume">
      <div class="zoy-calc-toolbar"><h3>◇ Volume Calculator</h3></div>
      <div class="zoy-calc-form">
        <div class="zoy-field"><label>Type</label>
          <select id="zoyVolType">
            <option value="concrete">Concrete (l×w×h)</option>
            <option value="foundation">Foundation (l×w×h)</option>
            <option value="wall">Wall area (l×h)</option>
            <option value="floor">Floor area (l×w)</option>
            <option value="excavation">Excavation (l×w×depth)</option>
          </select>
        </div>
        <div class="zoy-field"><label>Unit</label><select id="zoyVolUnit"><option>m</option><option>cm</option></select></div>
        <div class="zoy-field"><label>Length</label><input type="number" id="zoyVolLength" placeholder="5"></div>
        <div class="zoy-field"><label>Width</label><input type="number" id="zoyVolWidth" placeholder="4"></div>
        <div class="zoy-field" id="zoyVolHeightField"><label>Height</label><input type="number" id="zoyVolHeight" placeholder="0.12"></div>
      </div>
      <div class="zoy-calc-result">
        <div><p class="r-label" id="zoyVolResultLabel">Result</p><p class="r-val" id="zoyVolResultVal">0 m³</p></div>
        <button class="zoy-btn-sm primary" id="zoyVolToRab">→ Send to RAB</button>
      </div>
    </section>

    <!-- VIEW - MATERIAL CALCULATOR -->
    <section class="zoy-view zoy-calc-view" id="zoyView-material">
      <div class="zoy-calc-toolbar"><h3>Material + MASPETRUK</h3></div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;max-width:800px;margin-bottom:16px;">
        <div class="zoy-field"><label>Material Name</label><input type="text" id="zoyMatName" placeholder="e.g. Cement" list="zoyMatSuggest"><datalist id="zoyMatSuggest"></datalist></div>
        <div class="zoy-field"><label>Unit</label><select id="zoyMatUnit"><option value="m³">m³</option><option value="m²">m²</option><option value="sack">sack</option><option value="pcs">pcs</option><option value="kg">kg</option><option value="liter">liter</option><option value="batang">batang</option><option value="roll">roll</option><option value="lembar">lembar</option><option value="dus">dus</option><option value="ton">ton</option></select></div>
        <div class="zoy-field"><label>Volume / Quantity</label><input type="number" id="zoyMatQty" placeholder="100" step="any"></div>
        <div class="zoy-field"><label>Unit Price (Rp)</label><input type="number" id="zoyMatPrice" placeholder="75000" step="any"></div>
        <div class="zoy-field" style="grid-column:span 2;"><label>Total Price</label><output id="zoyMatTotal" style="font-family:var(--zoy-font-m);font-size:20px;color:var(--zoy-blue);font-weight:600;">Rp 0</output></div>
      </div>
      <div style="display:flex;gap:8px;margin-bottom:16px;">
        <button class="zoy-btn-sm ghost" id="zoyMatLoadMaspetruk">Load MASPETRUK</button>
        <button class="zoy-btn-sm primary" id="zoyMatAddToRab">＋ Add to RAB</button>
      </div>
      <div style="background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:var(--zoy-radius);padding:16px;margin-bottom:16px;max-width:800px;">
        <h4 style="font-family:var(--zoy-font-d);font-size:14px;margin-bottom:8px;display:flex;justify-content:space-between;align-items:center;">
          <span>▣ MASPETRUK Jawa Tengah</span>
          <span style="font-size:11px;color:var(--zoy-muted2);">Source: Dinas PUPR Jateng</span>
        </h4>
        <div id="zoyMaspetrukData" style="max-height:300px;overflow-y:auto;font-size:12px;">
          <p style="color:var(--zoy-muted2);text-align:center;padding:20px;">Click "Load MASPETRUK" to view data</p>
        </div>
      </div>
    </section>

    <!-- VIEW - SCIENTIFIC CALCULATOR -->
    <section class="zoy-view zoy-calc-view" id="zoyView-scientific">
      <div class="zoy-calc-toolbar"><h3>⌨ Scientific Calculator</h3></div>
      <div style="background:var(--zoy-bg);border-radius:8px;padding:16px 20px;margin-bottom:12px;text-align:right;font-family:var(--zoy-font-m);font-size:24px;min-height:60px;border:1px solid var(--zoy-line);max-width:500px;">
        <span id="zoySciDisplay">0</span>
      </div>
      <div style="display:grid;grid-template-columns:repeat(6,1fr);gap:6px;max-width:500px;">
        <button class="zoy-calc-btn" data-action="sin">sin</button>
        <button class="zoy-calc-btn" data-action="cos">cos</button>
        <button class="zoy-calc-btn" data-action="tan">tan</button>
        <button class="zoy-calc-btn" data-action="log">log</button>
        <button class="zoy-calc-btn" data-action="ln">ln</button>
        <button class="zoy-calc-btn" data-action="sqrt">√</button>
        <button class="zoy-calc-btn" data-action="asin">asin</button>
        <button class="zoy-calc-btn" data-action="acos">acos</button>
        <button class="zoy-calc-btn" data-action="atan">atan</button>
        <button class="zoy-calc-btn" data-action="exp">eˣ</button>
        <button class="zoy-calc-btn" data-action="pow2">x²</button>
        <button class="zoy-calc-btn" data-action="pow3">x³</button>
        <button class="zoy-calc-btn" data-action="pi">π</button>
        <button class="zoy-calc-btn" data-action="e">e</button>
        <button class="zoy-calc-btn" data-action="ms">MS</button>
        <button class="zoy-calc-btn" data-action="mr">MR</button>
        <button class="zoy-calc-btn" data-action="mc">MC</button>
        <button class="zoy-calc-btn" data-action="factorial">x!</button>
        <button class="zoy-calc-btn" data-action="7">7</button>
        <button class="zoy-calc-btn" data-action="8">8</button>
        <button class="zoy-calc-btn" data-action="9">9</button>
        <button class="zoy-calc-btn" data-action="divide">÷</button>
        <button class="zoy-calc-btn" data-action="left">(</button>
        <button class="zoy-calc-btn" data-action="right">)</button>
        <button class="zoy-calc-btn" data-action="4">4</button>
        <button class="zoy-calc-btn" data-action="5">5</button>
        <button class="zoy-calc-btn" data-action="6">6</button>
        <button class="zoy-calc-btn" data-action="multiply">×</button>
        <button class="zoy-calc-btn" data-action="percent">%</button>
        <button class="zoy-calc-btn" data-action="backspace">⌫</button>
        <button class="zoy-calc-btn" data-action="1">1</button>
        <button class="zoy-calc-btn" data-action="2">2</button>
        <button class="zoy-calc-btn" data-action="3">3</button>
        <button class="zoy-calc-btn" data-action="subtract">−</button>
        <button class="zoy-calc-btn" data-action="0">0</button>
        <button class="zoy-calc-btn" data-action="clear">AC</button>
        <button class="zoy-calc-btn" data-action="decimal">.</button>
        <button class="zoy-calc-btn" data-action="add">+</button>
        <button class="zoy-calc-btn" data-action="equals" style="grid-column:span 4;background:var(--zoy-grad);color:#fff;">=</button>
      </div>
      <div style="display:flex;gap:8px;margin-top:12px;max-width:500px;align-items:center;">
        <span style="font-size:12px;color:var(--zoy-muted);font-family:var(--zoy-font-m);">→ Material:</span>
        <input type="text" id="zoySciResultToMat" placeholder="Result to Material" style="flex:1;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:6px;color:var(--zoy-text);padding:6px 10px;font-size:13px;">
        <button class="zoy-btn-sm primary" id="zoySciApplyToMat">Apply</button>
      </div>
    </section>

    <!-- VIEW - COST ESTIMATION -->
    <section class="zoy-view zoy-calc-view" id="zoyView-cost">
      <div class="zoy-calc-toolbar">
        <h3>§ Cost Estimation</h3>
        <button class="zoy-btn-sm ghost" id="zoyTranslateCostBtn" style="color:var(--zoy-violet);border-color:rgba(139,92,246,0.3);">◈ Translate</button>
      </div>
      <div class="zoy-calc-form">
        <div class="zoy-field"><label>Project Type</label><select id="zoyCostType"><option value="house">House</option><option value="office">Office</option><option value="warehouse">Warehouse</option><option value="road">Road</option></select></div>
        <div class="zoy-field"><label>Area (m²)</label><input type="number" id="zoyCostArea" placeholder="100" value="100"></div>
        <div class="zoy-field"><label>Floor Count</label><input type="number" id="zoyCostFloors" value="1"></div>
        <div class="zoy-field"><label>Finish Level</label><select id="zoyCostFinish"><option value="basic">Basic</option><option value="standard" selected>Standard</option><option value="premium">Premium</option></select></div>
      </div>
      <div class="zoy-calc-result">
        <div><p class="r-label">Estimated Cost</p><p class="r-val" id="zoyCostResult">Rp 0</p></div>
        <p style="font-size:11px;color:var(--zoy-muted2);" id="zoyCostNote"></p>
      </div>
      <div id="zoyCostDetailContainer" style="display:none;margin-top:16px;">
        <h4 style="font-family:var(--zoy-font-d);font-size:14px;margin-bottom:10px;">◈ Detailed Material Breakdown</h4>
        <div class="zoy-cost-detail" id="zoyCostDetailTable"></div>
      </div>
    </section>

    <!-- VIEW - HISTORY -->
<section class="zoy-view zoy-calc-view" id="zoyView-history">
  <div class="zoy-calc-toolbar">
    <h3>◈ History</h3>
    <!-- Tambahkan tombol New Chat di sini -->
    <button class="zoy-btn-sm primary" id="zoyHistoryNewChatBtn">＋ New Chat</button>
  </div>
  <div class="zoy-history-list" id="zoyHistoryList">
    <p style="color:var(--zoy-muted2);text-align:center;padding:40px;">No chat history yet. Start a new chat!</p>
  </div>
</section>

    <!-- VIEW - PROJECTS -->
    <section class="zoy-view zoy-calc-view" id="zoyView-projects">
      <div class="zoy-calc-toolbar"><h3>▣ Projects</h3><button class="zoy-btn-sm primary" id="zoyNewProject">＋ New Project</button></div>
      <div class="zoy-history-list" id="zoyProjectList">
        <p style="color:var(--zoy-muted2);text-align:center;padding:40px;">▣ No projects yet.<br><span style="font-size:12px;">Click "New Project" to create.</span></p>
      </div>
    </section>

    <!-- VIEW - S -->
<section class="zoy-view zoy-calc-view" id="zoyView-s">
  <div class="zoy-calc-toolbar"><h3>Settings</h3></div>
  <div class="zoy-s-grid">
    <nav class="zoy-s-tabs" id="zoysTabs">
      <button class="zoy-s-tab active" data-tab="profile">Profile</button>
      <button class="zoy-s-tab" data-tab="security">Security</button>
      <button class="zoy-s-tab" data-tab="preferences">Preferences</button>
      <button class="zoy-s-tab" data-tab="ai">AI Preferences</button>
      <button class="zoy-s-tab" data-tab="plan">Plan & Billing</button>
    </nav>
    <div>
      <div class="zoy-s-panel" data-panel="profile">
  <h4>Profile User</h4>

  <!-- Info Status Akun -->
  <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;padding:12px;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:10px;flex-wrap:wrap;gap:10px;">
    <div style="display:flex;align-items:center;gap:12px;">
      <div id="zoyProfileAvatar" style="width:48px;height:48px;border-radius:50%;background:var(--zoy-grad);display:flex;align-items:center;justify-content:center;font-weight:bold;font-size:18px;color:#fff;overflow:hidden;">
        G
      </div>
      <div>
        <div style="font-weight:600;font-size:14px;" id="zoyProfileAuthStatus">Guest Account</div>
        <div style="font-size:11px;color:var(--zoy-muted2);" id="zoyProfileAuthType">Belum login — Menggunakan profil lokal</div>
      </div>
    </div>

    <!-- TOMBOL LOGOUT -->
    <button class="zoy-btn-sm ghost" id="zoyProfileLogoutBtn" onclick="zoyHandleLogout()" style="color:var(--zoy-red);border-color:rgba(239,68,68,0.3);">
      🚪 Logout
    </button>
  </div>

        <!-- Tombol khusus Admin (Otomatis muncul jika email admin) -->
<div id="zoyAdminMenuWrapper" style="display:none; margin-bottom:16px; padding:12px; background:rgba(139,92,246,0.1); border:1px solid var(--zoy-violet); border-radius:10px;">
  <p style="font-size:12px; font-weight:600; color:var(--zoy-violet); margin-bottom:6px;">👑 Administrator Access</p>
  <button class="zoy-btn-sm primary" onclick="document.getElementById('zoyAdminModal').classList.add('show')">Buka Admin Panel</button>
</div>

  <!-- FIELD USER ID (TAMBAHAN FITUR BARU) -->
  <div class="zoy-field">
    <label>User ID</label>
    <div style="display:flex;gap:8px;">
      <input type="text" id="zoyProfileUserId" readonly style="background:rgba(255,255,255,0.06);cursor:default;font-family:var(--zoy-font-m);color:var(--zoy-blue);font-weight:600;" value="-">
      <button class="zoy-btn-sm ghost" onclick="zoyCopyUserId()" style="white-space:nowrap;">Copy ID</button>
    </div>
  </div>

  <div class="zoy-field">
    <label>Username</label>
    <input type="text" id="zoyProfileUsername" placeholder="Username">
  </div>
  <div class="zoy-field">
    <label>Display Name</label>
    <input type="text" id="zoyProfileDisplayName" placeholder="Nama Lengkap">
  </div>
  <div class="zoy-field">
    <label>Email</label>
    <input type="email" id="zoyProfileEmail" placeholder="email@domain.com">
  </div>
  
  <div style="display:flex;gap:8px;margin-top:8px;">
    <button class="zoy-btn-sm primary" style="width:fit-content;" onclick="zoySaveProfile()">◈ Save Profile</button>
    <button class="zoy-btn-sm ghost" style="width:fit-content;display:none;" id="zoyResetGoogleProfileBtn" onclick="zoyResetToGoogleProfile()">⟳ Sync Google Profile</button>
  </div>
  <span class="zoy-saved" id="zoyProfileSaved">✓ Profil berhasil disimpan!</span>
</div>
          <div class="zoy-s-panel" data-panel="security" style="display:none;">
            <h4>Security</h4>
            <div class="zoy-field"><label>Old Password</label><input type="password" id="zoySecurityOldPass" placeholder="••••••••"></div>
            <div class="zoy-field"><label>New Password</label><input type="password" id="zoySecurityNewPass" placeholder="Min 8 characters"></div>
            <div class="zoy-field"><label>Confirm</label><input type="password" id="zoySecurityConfirmPass" placeholder="Re-type"></div>
            <div id="zoySecurityError" style="color:var(--zoy-red);font-size:12px;display:none;"></div>
            <button class="zoy-btn-sm primary" style="width:fit-content;" onclick="zoyChangePassword()">◈ Change</button>
            <span class="zoy-saved" id="zoySecuritySaved">✓ Changed!</span>
          </div>
          <div class="zoy-s-panel" data-panel="preferences" style="display:none;">
            <h4>Preferences</h4>
            <div class="zoy-field"><label>◈ Language</label><select id="zoyPrefLanguage"><option value="id">Bahasa Indonesia</option><option value="en">English</option><option value="zh">中文</option></select></div>
            <div class="zoy-field"><label>Theme</label><select id="zoyPrefTheme"><option value="dark">Dark</option><option value="light">Light</option><option value="system">System</option></select></div>
            <div class="zoy-field"><label>Font Size</label><select id="zoyPrefFontSize"><option value="small">Small</option><option value="medium" selected>Medium</option><option value="large">Large</option></select></div>
            <button class="zoy-btn-sm primary" style="width:fit-content;" onclick="zoySavePreferences()">Save</button>
            <span class="zoy-saved" id="zoyPrefSaved">✓ Saved!</span>
          </div>
          <div class="zoy-s-panel" data-panel="ai" style="display:none;">
  <h4>AI Preferences</h4>
  <div class="zoy-field">
    <label>Response Detail</label>
    <select id="zoyAIResponseDetail">
      <option value="concise">Concise</option>
      <option value="balanced" selected>Balanced</option>
      <option value="detailed">Detailed</option>
    </select>
  </div>
  <div class="zoy-field">
    <label>Default Unit</label>
    <select id="zoyAIDefaultUnit">
      <option value="metric">Metric</option>
      <option value="imperial">Imperial</option>
    </select>
  </div>
  <div class="zoy-field">
    <label>AI Provider Engine</label>
    <select id="zoyAIProvider">
      <option value="zoy_basic">Zoy AI Basic Engine (Free)</option>
      <option value="zoy_pro" id="optZoyPro" disabled>Zoy AI Pro Engine (Locked - Pro / Max)</option>
      <option value="zoy_max" id="optZoyMax" disabled>Zoy AI Max Engine (Locked - Premium Max Only)</option>
    </select>
  </div>
  <button class="zoy-btn-sm primary" style="width:fit-content;" onclick="zoySaveAIPreferences()">Save</button>
  <span class="zoy-saved" id="zoyAISaved">Saved</span>
</div>
          <div class="zoy-s-panel" data-panel="plan" style="display:none;">
            <h4>Plan and Billing</h4>
<div style="background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:12px;padding:16px;margin-bottom:12px;">
  <div style="display:flex;justify-content:space-between;align-items:center;">
    <div>
      <span style="font-size:16px;font-weight:600;font-family:var(--zoy-font-d);" id="zoyPlanDisplay">Free Plan</span>
      <p style="font-size:11px;color:var(--zoy-muted2);" id="zoyPlanDetail">5 tokens · Reset 4 hours</p>
    </div>
    <span style="font-size:13px;color:var(--zoy-green);" id="zoyPlanStatus">Active</span>
  </div>
</div>
<div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;">
  <button class="zoy-btn-sm ghost" style="background:var(--zoy-panel);border:1px solid var(--zoy-line);border-radius:10px;padding:14px;text-align:center;display:flex;flex-direction:column;align-items:center;cursor:pointer;" onclick="zoyUpgradePlan('free')">
    <div style="font-weight:600;font-size:13px;color:var(--zoy-text);">Free</div>
    <div style="font-size:11px;color:var(--zoy-muted2);">$0 / month</div>
  </button>
  
  <button class="zoy-btn-sm ghost" style="background:var(--zoy-panel);border:2px solid var(--zoy-blue);border-radius:10px;padding:14px;text-align:center;display:flex;flex-direction:column;align-items:center;cursor:pointer;" onclick="zoyUpgradePlan('pro')">
    <div style="font-weight:600;font-size:13px;color:var(--zoy-blue);">Pro</div>
    <div style="font-size:11px;color:var(--zoy-muted2);">$89 / month</div>
  </button>
  
  <button class="zoy-btn-sm ghost" style="background:var(--zoy-panel);border:2px solid var(--zoy-purple);border-radius:10px;padding:14px;text-align:center;display:flex;flex-direction:column;align-items:center;cursor:pointer;" onclick="zoyUpgradePlan('premium')">
    <div style="font-weight:600;font-size:13px;color:var(--zoy-purple);">Premium Max</div>
    <div style="font-size:11px;color:var(--zoy-muted2);">$299 / month</div>
  </button>
</div>
          </div>
        </div>
      </div>

  </main>
</div>

<!-- ============================================================
   TRANSLATE MODAL
   ============================================================ -->
<div class="zoy-modal" id="zoyTranslateModal">
  <div class="zoy-modal-box" style="max-width:600px;">
    <button class="zoy-modal-close" id="zoyTranslateClose">✕</button>
    <h3>◈ Translate RAB / Estimation</h3>
    <p class="sub">Translate construction data to another language</p>
    
    <div class="zoy-field" style="margin-bottom:12px;">
      <label>Target Language</label>
      <select id="zoyTranslateTargetLang" style="width:100%;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:10px;color:var(--zoy-text);padding:10px 12px;font-size:13px;">
        <option value="id">Bahasa Indonesia</option>
        <option value="en">English</option>
        <option value="zh">中文</option>
        <option value="ja">日本語</option>
        <option value="ko">한국어</option>
        <option value="ar">العربية</option>
        <option value="hi">हिन्दी</option>
        <option value="es">Español</option>
        <option value="fr">Français</option>
        <option value="de">Deutsch</option>
        <option value="pt">Português</option>
        <option value="ru">Русский</option>
        <option value="it">Italiano</option>
        <option value="nl">Nederlands</option>
        <option value="tr">Türkçe</option>
        <option value="vi">Tiếng Việt</option>
        <option value="th">ภาษาไทย</option>
      </select>
    </div>
    
    <div class="zoy-field" style="margin-bottom:12px;">
      <label>Content to Translate</label>
      <textarea id="zoyTranslateText" rows="8" style="width:100%;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:10px;color:var(--zoy-text);padding:10px 12px;font-size:13px;font-family:inherit;resize:vertical;" placeholder="RAB or estimation text to translate..."></textarea>
    </div>
    
    <div style="display:flex;gap:8px;margin-bottom:12px;">
      <button class="zoy-btn-sm primary" id="zoyTranslateExecute" style="flex:1;">◈ Translate</button>
      <button class="zoy-btn-sm ghost" id="zoyTranslateCopy" style="display:none;">◆ Copy</button>
    </div>
    
    <div id="zoyTranslateResult" style="display:none;background:var(--zoy-panel2);border:1px solid var(--zoy-line);border-radius:10px;padding:12px;margin-top:8px;max-height:300px;overflow-y:auto;">
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:8px;">
        <span style="font-size:12px;color:var(--zoy-muted2);">Translation Result</span>
        <span id="zoyTranslateService" style="font-size:10px;color:var(--zoy-muted2);"></span>
      </div>
      <div id="zoyTranslateOutput" style="font-size:13px;line-height:1.6;white-space:pre-wrap;word-wrap:break-word;"></div>
    </div>
  </div>
</div>

<!-- ============================================================
   GUEST GATE
   ============================================================ -->
<div class="zoy-guest" id="zoyGuestGate">
  <div><strong>Free messages used</strong><p>Log in or create account to keep chatting with Zoy AI.</p></div>
  <button class="zoy-btn-sm primary" id="zoyGuestBtn">Log in</button>
</div>

<!-- ============================================================
   TOKEN POPUP
   ============================================================ -->
<div class="zoy-popup-overlay" id="zoyTokenPopup">
  <div class="zoy-popup">
    <div class="zoy-popup-icon">⌛</div>
    <h3 class="zoy-popup-title">Tokens Exhausted!</h3>
    <p class="zoy-popup-desc">
      You have used all tokens today. Please wait <strong id="zoyPopupResetTime">4 hours</strong> for token reset.
    </p>
    <div class="zoy-popup-timer">
      <span id="zoyPopupCountdown">04:00:00</span>
    </div>
    <div class="zoy-popup-actions">
      <button class="zoy-btn zoy-btn-primary" id="zoyPopupCloseBtn">OK, I'll Wait</button>
      <button class="zoy-btn zoy-btn-ghost" id="zoyPopupLoginBtn">◈ Login / Upgrade</button>
    </div>
    <p class="zoy-popup-note">Upgrade to Pro or Premium Max for more tokens!</p>
  </div>
</div>
<!-- ============================================================
   ADMIN PANEL MODAL (Khusus Admin: zoyaideveloper@gmail.com)
   ============================================================ -->
<div class="zoy-modal" id="zoyAdminModal">
  <div class="zoy-modal-box" style="max-width: 500px; max-height: 90vh; overflow-y: auto;">
    <button class="zoy-modal-close" onclick="document.getElementById('zoyAdminModal').classList.remove('show')">✕</button>
    <h3>👑 Zoy AI Admin Panel</h3>
    <p class="sub">Kelola user, upgrade plan, dan tambah user baru.</p>
    
    <!-- Bagian 1: Cari & Upgrade User -->
    <div style="margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid var(--zoy-line);">
      <h4 style="font-size: 13px; margin-bottom: 8px;">Cari & Upgrade Plan User</h4>
      <div class="zoy-field" style="margin-bottom: 8px;">
        <div style="display: flex; gap: 8px;">
          <input type="text" id="adminSearchInput" placeholder="ID atau Email user">
          <button class="zoy-btn-sm primary" onclick="adminVerifyUser()">Cari</button>
        </div>
      </div>

      <div id="adminVerifyResult" style="display:none; background: rgba(255,255,255,0.03); border: 1px solid var(--zoy-line); padding: 10px; border-radius: 8px; margin-top: 8px;">
        <p style="font-size: 12px; margin-bottom: 2px;"><strong>Nama:</strong> <span id="resUserName">-</span></p>
        <p style="font-size: 12px; margin-bottom: 2px;"><strong>Email:</strong> <span id="resUserEmail">-</span></p>
        <p style="font-size: 12px; margin-bottom: 6px;"><strong>Plan:</strong> <span id="resUserPlan" style="color:var(--zoy-yellow)">-</span></p>
        
        <input type="hidden" id="resTargetUserId">
        <select id="adminNewPlanSelect" style="width:100%; background:var(--zoy-panel); border:1px solid var(--zoy-line); color:var(--zoy-text); padding:6px; border-radius:6px; font-size:12px; margin-bottom:6px;">
          <option value="free">Free (Starter)</option>
          <option value="pro">Pro ($89/mo)</option>
          <option value="premium">Premium Max ($299/mo)</option>
        </select>
        <button class="zoy-btn-sm primary" style="width:100%; background:var(--zoy-green); font-size:12px;" onclick="adminExecuteUpgrade()">✓ Update Plan User</button>
      </div>
    </div>

    <!-- Bagian 2: Tambah User Baru (Add User) -->
    <div>
      <h4 style="font-size: 13px; margin-bottom: 8px;">➕ Tambah User Baru Secara Manual</h4>
      <div class="zoy-field" style="margin-bottom: 6px;"><input type="text" id="newUserName" placeholder="Nama Lengkap"></div>
      <div class="zoy-field" style="margin-bottom: 6px;"><input type="email" id="newUserEmail" placeholder="email@domain.com"></div>
      <div class="zoy-field" style="margin-bottom: 6px;"><input type="password" id="newUserPass" placeholder="Password (min 8 karakter)"></div>
      <div class="zoy-field" style="margin-bottom: 8px;">
        <select id="newUserPlan" style="width:100%; background:var(--zoy-panel); border:1px solid var(--zoy-line); color:var(--zoy-text); padding:6px; border-radius:6px; font-size:12px;">
          <option value="free">Free Plan</option>
          <option value="pro">Pro Plan</option>
          <option value="premium">Premium Max</option>
        </select>
      </div>
      <button class="zoy-btn-sm primary" style="width:100%; font-size:12px;" onclick="adminAddNewUser()">Simpan User Baru</button>
    </div>

  </div>
</div>

<!-- ============================================================
   AUTH MODAL
   ============================================================ -->
<div class="zoy-modal" id="zoyAuthModal">
  <div class="zoy-modal-box">
    <button class="zoy-modal-close" id="zoyAuthClose">✕</button>
    
    <!-- Login Form -->
    <div id="zoyAuthLogin">
      <h3>Log in to Zoy AI</h3>
      <p class="sub">Continue with an account to unlock more tokens.</p>
      
      <div style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 16px;">
  <!-- Google -->
  <button class="zoy-oauth-btn" onclick="zoyOAuthLogin('google')">
    <svg width="18" height="18" viewBox="0 0 24 24">
      <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
      <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
      <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
      <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
    </svg>
    <span>Lanjutkan dengan Google</span>
  </button>

  <!-- GitHub -->
  <button class="zoy-oauth-btn" onclick="zoyOAuthLogin('github')">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
      <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
    </svg>
    <span>Lanjutkan dengan GitHub</span>
  </button>

  <!-- Facebook -->
  <button class="zoy-oauth-btn" onclick="zoyOAuthLogin('facebook')">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2">
      <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
    </svg>
    <span>Lanjutkan dengan Facebook</span>
  </button>
</div>
      
      <div class="zoy-divider">or</div>
      
      <input type="email" id="zoyAuthEmail" placeholder="you@email.com">
      <input type="password" id="zoyAuthPassword" placeholder="Password">
      <button class="zoy-btn-sm primary" style="width:100%;" id="zoyAuthLoginBtn">Log In</button>
      
      <p class="zoy-auth-toggle" id="zoyAuthSwitchToRegister">Belum punya akun? Klik Register</p>
    </div>
    
    <!-- Register Form -->
    <div id="zoyAuthRegister" style="display:none;">
      <h3>Register to Zoy AI</h3>
      <p class="sub">Create your account to get started.</p>
      
      <input type="text" id="zoyRegName" placeholder="Full Name">
      <input type="email" id="zoyRegEmail" placeholder="you@email.com">
      <input type="password" id="zoyRegPassword" placeholder="Password (min 8 characters)">
      <select id="zoyRegRole" style="width:100%;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:10px;color:var(--zoy-text);padding:10px 12px;font-size:13px;margin-bottom:8px;">
        <option value="civil_engineer">Civil Engineer</option>
        <option value="contractor">Contractor</option>
        <option value="consultant">Consultant</option>
        <option value="student">Student</option>
        <option value="other">Other</option>
      </select>
      <button class="zoy-btn-sm primary" style="width:100%;" id="zoyAuthRegisterBtn">Register</button>
      
      <p class="zoy-auth-toggle" id="zoyAuthSwitchToLogin">Sudah punya akun? Klik Login</p>
    </div>
  </div>
</div>

<!-- ============================================================
   WATERMARK
   ============================================================ -->
<div style="position:fixed;bottom:4px;right:10px;z-index:9999;font-size:10px;font-family:'IBM Plex Mono',monospace;color:rgba(139,92,246,0.2);pointer-events:none;user-select:none;">
  Zoy AI © 2026 <a href="https://github.com/ZyeeCeleste" target="_blank" style="color:rgba(139,92,246,0.35);pointer-events:auto;text-decoration:none;">ZyeeCeleste</a>
</div>

<!-- ============================================================
   JAVASCRIPT - LENGKAP
   ============================================================ -->
<script>
(function(){
"use strict";

let state = {
  guest: true,
  userId: null,
  chatHistory: [],
  currentChatId: null,
  currentMessages: [],
  projects: [],
  rabRows: [],
  rabSeq: 0
};

let tokenState = {
  plan: 'free',
  tokens: window.currentUser ? 20 : 5, // Otomatis set 20 jika user login, 5 jika guest
  lastReset: Date.now()
};

// Ambil data user dari Laravel Auth
window.currentUser = @json(auth()->user() ?? null);

// Deteksi status user login dan atur limit token
if (window.currentUser) {
  state.guest = false;
  state.userId = window.currentUser.id;

  // Cek apakah ada simpanan cache token lama yang masih bernilai <= 5
  const savedState = JSON.parse(localStorage.getItem('zoy_state') || '{}');
  if (!savedState.tokens || savedState.tokens <= 5) {
    tokenState.tokens = 20; // Paksa perbarui ke 20 token
  } else {
    tokenState.tokens = savedState.tokens;
  }
}

console.log('Zoy AI v3.0.0 by ZyeeCeleste');

// ============================================================
// 1. TOKEN SYSTEM
// ============================================================
const TOKEN_CONFIG = {
  free: { limit: 5, resetHours: 4 },           // Mode Guest (5 Token / 4 jam)
  authenticated: { limit: 20, resetHours: 4 },  // Mode User Login (20 Token / 4 jam)
  pro: { limit: 25, resetHours: 24 },
  premium: { limit: Infinity, resetHours: 0 }
};

function getTokenConfig() {
  // Jika user terdeteksi login via Laravel, ambil jatah 20 token
  if (window.currentUser && tokenState.plan === 'free') {
    return TOKEN_CONFIG.authenticated;
  }
  return TOKEN_CONFIG[tokenState.plan] || TOKEN_CONFIG.free;
}

function getTokens() {
  const config = getTokenConfig();
  if (config.limit === Infinity) return Infinity;
  
  const now = Date.now();
  const elapsed = (now - tokenState.lastReset) / (1000 * 60 * 60);
  
  // Reset token jika waktu reset sudah tercapai
  if (elapsed >= config.resetHours) {
    tokenState.tokens = config.limit;
    tokenState.lastReset = now;
  } 
  // Jika user login tapi jumlah tokennya di memori masih <= 5 (bawaan guest), naikkan ke limit login
  else if (window.currentUser && tokenState.plan === 'free' && tokenState.tokens <= 5) {
    tokenState.tokens = config.limit;
  }
  
  return tokenState.tokens;
}

function useToken() {
  const config = getTokenConfig();
  if (config.limit === Infinity) return true;
  
  let current = getTokens();
  if (current <= 0) {
    zoyShowTokenPopup();
    return false;
  }
  
  current = current - 1;
  tokenState.tokens = current;
  
  if (current === 1) {
    zoyShowTokenWarning();
  }
  
  // Simpan state ke LocalStorage agar token tidak kembali ke 5 saat page di-refresh
  if (typeof zoySaveState === 'function') {
    zoySaveState();
  }
  
  renderToken();
  return true;
}

function getResetInfo() {
  const config = getTokenConfig();
  if (config.limit === Infinity) return '∞ Unlimited';
  const now = Date.now();
  const elapsed = (now - tokenState.lastReset) / (1000 * 60 * 60);
  const remaining = Math.max(0, config.resetHours - elapsed);
  const hours = Math.floor(remaining);
  const minutes = Math.floor((remaining - hours) * 60);
  return remaining > 0 ? `⟳ ${hours}h ${minutes}m` : '✓ Ready';
}

function renderToken() {
  const config = getTokenConfig();
  // Jika user login, tampilkan label 'Member', jika tidak tampilkan nama plan
  const planName = window.currentUser 
    ? 'Member' 
    : (tokenState.plan.charAt(0).toUpperCase() + tokenState.plan.slice(1));
  
  let val, reset;
  if (config.limit === Infinity) {
    val = '∞';
    reset = '∞ Unlimited';
  } else {
    val = `${getTokens()} / ${config.limit}`;
    reset = getResetInfo();
  }
  
  ['zoyTkLabel','zoyTkLabelDrop'].forEach(id => {
    const el = document.getElementById(id); 
    if(el) el.textContent = planName + ' plan';
  });
  
  ['zoyTkVal','zoyTkValDrop'].forEach(id => {
    const el = document.getElementById(id); 
    if(el) el.textContent = val;
  });
  
  ['zoyTkReset','zoyTkResetDrop'].forEach(id => {
    const el = document.getElementById(id); 
    if(el) el.textContent = reset;
  });
  
  // Update badge pojok kanan bawah agar menampilkan sisa / total (misal: ⚡ 20 / 20)
  const badge = document.getElementById('zoyTokenBadge');
  if (badge) {
    badge.textContent = config.limit === Infinity 
      ? '⚡ ∞' 
      : `⚡ ${getTokens()} / ${config.limit}`;
  }
}

// ============================================================
// 2. TOKEN POPUP
// ============================================================
let zoyTokenPopupTimer = null;
let zoyTokenResetTime = null;

function zoyShowTokenPopup() {
  const overlay = document.getElementById('zoyTokenPopup');
  if (!overlay) return;
  const config = getTokenConfig();
  if (config.limit === Infinity) return;
  const now = Date.now();
  const elapsed = (now - tokenState.lastReset) / (1000 * 60 * 60);
  const remaining = Math.max(0, config.resetHours - elapsed);
  const resetMs = remaining * 60 * 60 * 1000;
  zoyTokenResetTime = now + resetMs;
  zoyUpdateTokenCountdown();
  overlay.classList.add('show');
  document.body.style.overflow = 'hidden';
  if (zoyTokenPopupTimer) clearInterval(zoyTokenPopupTimer);
  zoyTokenPopupTimer = setInterval(zoyUpdateTokenCountdown, 1000);
}

function zoyCloseTokenPopup() {
  const overlay = document.getElementById('zoyTokenPopup');
  if (!overlay) return;
  overlay.classList.remove('show');
  document.body.style.overflow = '';
  if (zoyTokenPopupTimer) {
    clearInterval(zoyTokenPopupTimer);
    zoyTokenPopupTimer = null;
  }
}

document.getElementById('zoyPopupCloseBtn')?.addEventListener('click', zoyCloseTokenPopup);
document.getElementById('zoyPopupLoginBtn')?.addEventListener('click', function() {
  zoyCloseTokenPopup();
  zoyOpenAuth();
});

function zoyUpdateTokenCountdown() {
  const countdownEl = document.getElementById('zoyPopupCountdown');
  const resetTimeEl = document.getElementById('zoyPopupResetTime');
  if (!countdownEl) return;
  const now = Date.now();
  const diff = Math.max(0, zoyTokenResetTime - now);
  if (diff <= 0) {
    countdownEl.textContent = '00:00:00';
    if (resetTimeEl) resetTimeEl.textContent = 'now';
    zoyCloseTokenPopup();
    return;
  }
  const hours = Math.floor(diff / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);
  countdownEl.textContent = 
    String(hours).padStart(2, '0') + ':' +
    String(minutes).padStart(2, '0') + ':' +
    String(seconds).padStart(2, '0');
  if (resetTimeEl) {
    const config = getTokenConfig();
    resetTimeEl.textContent = `${config.resetHours} hours`;
  }
}

function zoyShowTokenWarning() {
  const warning = document.createElement('div');
  warning.style.cssText = `
    position: fixed;
    bottom: 80px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--zoy-yellow);
    color: #1a1a2e;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 600;
    z-index: 100;
    animation: zoyFadeIn 0.3s ease;
    box-shadow: 0 4px 20px rgba(245, 158, 11, 0.3);
  `;
  warning.textContent = '⚠️ Only 1 token remaining!';
  document.body.appendChild(warning);
  setTimeout(() => {
    warning.style.opacity = '0';
    warning.style.transition = 'opacity 0.5s';
    setTimeout(() => warning.remove(), 500);
  }, 3000);
}

// ============================================================
// 3. SLIDER
// ============================================================
const examples = [
  {tag:'RAB', title:'"How do I add a RAB item?"', user:'How do I add a RAB item?', ai:'Open RAB Calculator → Add item → fill description, volume, unit, and pricing.'},
  {tag:'Volume', title:'"Concrete for 4×5m slab"', user:'How much concrete for a 4x5m slab?', ai:'4 × 5 × 0.12 = 2.4 m³ of concrete needed.'},
  {tag:'Material', title:'"Cost of 100 blocks"', user:'Cost of 100 blocks at Rp5,000 each?', ai:'100 × Rp5,000 = Rp500,000 total.'},
  {tag:'Intro', title:'"What is Zoy AI?"', user:'Introduce yourself.', ai:'I\'m Zoy AI — an assistant for RAB, volume, and material calculations.'}
];

const sliderInner = document.getElementById('zoySliderInner');
const sliderDots = document.getElementById('zoySliderDots');
let slideIdx = 0;

examples.forEach((ex,i)=>{
  const slide = document.createElement('article');
  slide.className = 'zoy-slide';
  slide.innerHTML = `<div><p class="zoy-slide-tag">${ex.tag}</p><h3>${ex.title}</h3></div><div class="zoy-slide-visual"><p class="ai-line">&gt; ${ex.user}</p><p class="out-line" style="margin-top:8px;">Zoy AI: ${ex.ai}</p></div>`;
  sliderInner.appendChild(slide);
  const dot = document.createElement('button');
  dot.className = 'zoy-slider-dot'+(i===0?' active':'');
  dot.addEventListener('click',()=>goSlide(i));
  sliderDots.appendChild(dot);
});

function goSlide(i){
  slideIdx = (i+examples.length)%examples.length;
  sliderInner.style.transform = `translateX(-${slideIdx*100}%)`;
  document.querySelectorAll('.zoy-slider-dot').forEach((d,idx)=>d.classList.toggle('active',idx===slideIdx));
}

document.getElementById('zoySlidePrev').addEventListener('click',()=>goSlide(slideIdx-1));
document.getElementById('zoySlideNext').addEventListener('click',()=>goSlide(slideIdx+1));
let sliderTimer = setInterval(()=>goSlide(slideIdx+1),5000);
document.querySelector('.zoy-slider-wrap').addEventListener('mouseenter',()=>clearInterval(sliderTimer));

// ============================================================
// 4. REVEAL ANIMATION (FIX MOBILE & INITIAL VISIBILITY)
// ============================================================
const revealEls = document.querySelectorAll('.zoy-reveal');

if ('IntersectionObserver' in window) {
  const io = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add('in');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.01, rootMargin: '0px 0px 50px 0px' });

  revealEls.forEach(el => io.observe(el));
} else {
  revealEls.forEach(el => el.classList.add('in'));
}

// Paksa hero section langsung muncul tanpa nunggu scroll
document.querySelectorAll('#zoyLandingHero .zoy-reveal').forEach(el => {
  el.classList.add('in');
});

// ============================================================
// 5. APP NAVIGATION
// ============================================================
const appShell = document.getElementById('zoyApp');

function openApp(){
  appShell.classList.add('active');
  document.body.style.overflow = 'hidden';
  renderToken();
  renderHistory();
  renderProjects();
  document.querySelectorAll('.zoy-sb-item').forEach(b => b.classList.remove('active'));
  const chatBtn = document.querySelector('.zoy-sb-item[data-view="chat"]');
  if(chatBtn) chatBtn.classList.add('active');
  document.querySelectorAll('.zoy-view').forEach(sec => sec.classList.remove('active'));
  const chatView = document.getElementById('zoyView-chat');
  if(chatView) chatView.classList.add('active');
  document.getElementById('zoyTopTitle').textContent = 'Chat';
  document.getElementById('zoyTopSub').textContent = 'Guest — 5 free messages';
}

function closeApp(){
  appShell.classList.remove('active');
  document.body.style.overflow = '';
  window.scrollTo({top:0,behavior:'smooth'});
}

document.getElementById('zoyTryBtn').addEventListener('click',openApp);
document.getElementById('zoyTryBtn2').addEventListener('click',openApp);
document.getElementById('zoyExitApp').addEventListener('click',closeApp);

const sidebar = document.getElementById('zoySidebar');
document.getElementById('zoySbCollapse').addEventListener('click',()=>sidebar.classList.toggle('collapsed'));

const viewTitles = {
  chat:['Chat','Guest — 5 free messages'],
  rab:['RAB Calculator','Item pricing, labor, tax & grand total'],
  volume:['Volume Calculator','Concrete, foundation, wall, floor'],
  material:['Material + MASPETRUK','Pricing from MASPETRUK'],
  scientific:['Scientific Calculator','sin, cos, tan, log, sqrt, x², x³, !'],
  cost:['Cost Estimation','Project budget estimation'],
  history:['History','All saved chats'],
  projects:['Projects','Project & file management'],
  s:['Settings','Profile, Security, Preferences']
};

document.querySelectorAll('.zoy-sb-item').forEach(btn=>{
  btn.addEventListener('click',function(){
    document.querySelectorAll('.zoy-sb-item').forEach(b=>b.classList.remove('active'));
    this.classList.add('active');
    const v = this.dataset.view;
    document.querySelectorAll('.zoy-view').forEach(sec=>sec.classList.remove('active'));
    const target = document.getElementById('zoyView-'+v);
    if(target) target.classList.add('active');
    document.getElementById('zoyTopTitle').textContent = viewTitles[v]?.[0]||v;
    document.getElementById('zoyTopSub').textContent = viewTitles[v]?.[1]||'';
    sidebar.classList.remove('mobile-open');
  });
});

// ============================================================
// 6. DROPDOWN MENU
// ============================================================
const menuBtn = document.getElementById('zoyMenuBtn');
const dropdown = document.getElementById('zoyDropdown');
let dropdownOpen = false;

menuBtn.addEventListener('click',function(e){
  e.stopPropagation();
  dropdownOpen = !dropdownOpen;
  dropdown.style.display = dropdownOpen?'block':'none';
});

document.addEventListener('click',function(e){
  if(!e.target.closest('#zoyMenuBtn')&&!e.target.closest('#zoyDropdown')){
    dropdown.style.display = 'none';
    dropdownOpen = false;
  }
});

document.querySelectorAll('.zoy-dropdown-item[data-view]').forEach(btn=>{
  btn.addEventListener('click',function(){
    const view = this.dataset.view;
    dropdown.style.display = 'none';
    dropdownOpen = false;
    if(!appShell.classList.contains('active')) {
      openApp();
      setTimeout(()=>{
        const item = document.querySelector(`.zoy-sb-item[data-view="${view}"]`);
        if(item) item.click();
      },300);
    } else {
      const item = document.querySelector(`.zoy-sb-item[data-view="${view}"]`);
      if(item) item.click();
    }
  });
});

document.getElementById('zoyDropdownLogin').addEventListener('click',function(){
  dropdown.style.display = 'none';
  dropdownOpen = false;
  if(!appShell.classList.contains('active')) openApp();
  setTimeout(zoyOpenAuth,300);
});

// ============================================================
// 7. NEW CHAT (DENGAN RESET SESI & MEMORI)
// ============================================================
document.getElementById('zoyNewChat').addEventListener('click', function() {
  // 1. Reset state chat aktif & kosongkan memori percakapan AI
  state.currentChatId = null;
  state.currentMessages = [];
  chatHistory = []; 

  // 2. Pindahkan tampilan sidebar ke tab 'chat'
  document.querySelectorAll('.zoy-sb-item').forEach(b => b.classList.remove('active'));
  const chatTab = document.querySelector('.zoy-sb-item[data-view="chat"]');
  if(chatTab) chatTab.classList.add('active');

  // 3. Tampilkan layar utama chat
  document.querySelectorAll('.zoy-view').forEach(sec => sec.classList.remove('active'));
  document.getElementById('zoyView-chat').classList.add('active');
  
  // 4. Bersihkan layar percakapan & tampilkan kembali "Empty State / Suggestion Chips"
  const inner = document.getElementById('zoyChatInner');
  inner.innerHTML = `
    <article class="zoy-chat-empty" id="zoyChatEmpty">
      <h3>◈ What are we building today?</h3>
      <p>Ask Zoy AI about RAB, material and volume calculations, cost estimation, or anything construction-related.</p>
      <nav class="zoy-suggest">
        <button class="zoy-suggest-chip" data-fill="Help me start a RAB for a 60m² house">◆ Start RAB for house</button>
        <button class="zoy-suggest-chip" data-fill="How much concrete for a 4x5m slab, 12cm thick?">◇ Concrete volume</button>
        <button class="zoy-suggest-chip" data-fill="Estimate cost for 100 concrete blocks at Rp5,000 each">◆ Material cost</button>
        <button class="zoy-suggest-chip" data-fill="Introduce yourself, what can Zoy AI do?">◈ What is Zoy AI?</button>
      </nav>
    </article>
  `;

  // 5. Pasang kembali event listener pada tombol-tombol rekomendasi (Suggestion Chips)
  document.querySelectorAll('.zoy-suggest-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      composerInput.value = chip.dataset.fill; 
      sendMsg();
    });
  });

  // 6. Perbarui Judul Topbar & Hilangkan efek seleksi di sidebar mini history
  document.getElementById('zoyTopTitle').textContent = 'Chat Baru';
  document.getElementById('zoyTopSub').textContent = 'Sesi Baru';
  
  renderHistory();
});

// ============================================================
// 8. CHAT SYSTEM
// ============================================================
const chatInner = document.getElementById('zoyChatInner');
const chatScroll = document.getElementById('zoyChatScroll');
const composerInput = document.getElementById('zoyComposerInput');
const guestGate = document.getElementById('zoyGuestGate');

function addMsg(role, html, imageFiles = []){
  const empty = document.getElementById('zoyChatEmpty');
  if(empty) empty.remove();
  const wrap = document.createElement('article');
  wrap.className = 'zoy-msg '+role;
  
  const isAi = role === 'ai' || role === 'assistant';
  let cleanHtml = html;

  // -----------------------------------------------------------
  // PENGATURAN AVATAR DYNAMIS (USER GOOGLE & AI IMGBB)
  // -----------------------------------------------------------
  // ✅ KODE PERBAIKAN:
// PERBAIKAN DI addMsg():
let avatarContent = 'U'; // Fallback default untuk guest

if (role === 'user') {
  if (window.currentUser) {
    const customProfile = JSON.parse(localStorage.getItem('zoy_custom_profile_' + window.currentUser.id) || '{}');
    const displayName = customProfile.displayName || window.currentUser.name || window.currentUser.email || 'U';
    
    if (window.currentUser.avatar) {
      avatarContent = `<img src="${window.currentUser.avatar}" alt="${escapeHtml(displayName)}" style="width:100%;height:100%;object-fit:cover;display:block;">`;
    } else {
      avatarContent = displayName.charAt(0).toUpperCase();
    }
  }
} else {
  // Avatar AI Zoy
  avatarContent = `<img src="https://i.ibb.co.com/VZnFKkh/image.jpg" alt="Zoy AI" style="width:100%;height:100%;object-fit:cover;display:block;">`;
}

  if (isAi && typeof html === 'string') {
    // 1. Normalisasi delimiter dari Gemini (\( \) -> $ dan \[ \] -> $$)
    cleanHtml = cleanHtml.replace(/\\\(/g, '$').replace(/\\\)/g, '$')
                         .replace(/\\\[/g, '$$').replace(/\\\]/g, '$$');

    // 2. Simpan blok Math menggunakan tag unik yang aman dari Markdown Parser
    const mathBlocks = [];
    cleanHtml = cleanHtml.replace(/(\$\$[\s\S]*?\$\$|\$[^$\n]+?\$)/g, function(match) {
      mathBlocks.push(match);
      return `ZOYMATHBLOCK${mathBlocks.length - 1}END`;
    });

    // 3. Render Markdown
    if (typeof marked !== 'undefined') {
      cleanHtml = marked.parse(cleanHtml);
    }

    // 4. Kembalikan rumus matematika asli
    cleanHtml = cleanHtml.replace(/ZOYMATHBLOCK(\d+)END/g, function(_, id) {
      return mathBlocks[parseInt(id)] || '';
    });
  } else if (typeof marked !== 'undefined' && typeof html === 'string') {
    cleanHtml = marked.parse(html);
  }
  
      // RENDER ATTACHMENT PREVIEW (GAMBAR BISA DIKLIK ATAU KARTU LINK DOKUMEN)
  let attachmentPreviewHtml = '';
  if (imageFiles && imageFiles.length > 0) {
    imageFiles.forEach(fileObj => {
      const actualFile = fileObj.file || fileObj;
      const mimeType = actualFile.type || fileObj.type || '';
      const name = fileObj.name || actualFile.name || 'File';
      const ext = name.split('.').pop().toLowerCase();

      try {
        const fileUrl = URL.createObjectURL(actualFile);

        if (mimeType.startsWith('image/')) {
          attachmentPreviewHtml += `
            <div style="margin-top:8px;">
              <a href="${fileUrl}" target="_blank" rel="noopener">
                <img src="${fileUrl}" style="max-width:100%; max-height:220px; border-radius:8px; border:1px solid var(--zoy-line); display:block; cursor:pointer;">
              </a>
            </div>`;
        } else {
          const docTypes = { pdf: 'PDF', xls: 'Excel', xlsx: 'Excel', doc: 'Word', docx: 'Word', txt: 'TXT', csv: 'CSV', zip: 'ZIP', rar: 'RAR' };
          const label = docTypes[ext] || 'Document';
          
          attachmentPreviewHtml += `
            <div style="margin-top:8px;">
              <a href="${fileUrl}" target="_blank" download="${escapeHtml(name)}" style="padding:8px 12px; background:rgba(255,255,255,0.05); border:1px solid var(--zoy-line); border-radius:8px; display:inline-flex; align-items:center; gap:8px; font-size:12px; text-decoration:none; cursor:pointer; transition:background 0.2s;">
                <span style="color:var(--zoy-blue); font-weight:600;">${label}</span>
                <span style="color:var(--zoy-text); text-overflow:ellipsis; overflow:hidden; white-space:nowrap; max-width:200px;">${escapeHtml(name)}</span>
              </a>
            </div>
          `;
        }
      } catch (e) {
        console.error("Gagal membuat URL berkas:", e);
      }
    });
  }

  // Gunakan variabel avatarContent
      wrap.innerHTML = `<span class="avatar">${avatarContent}</span><div class="bubble">${cleanHtml}${attachmentPreviewHtml}</div>`;
  chatInner.appendChild(wrap);

  // 5. Jalankan KaTeX auto-render secara paksa pada bubble pesan ini
  if (isAi && window.renderMathInElement) {
    try {
      renderMathInElement(wrap.querySelector('.bubble'), {
        delimiters: [
          {left: '$$', right: '$$', display: true},
          {left: '$', right: '$', display: false}
        ],
        throwOnError: false
      });
    } catch (e) {
      console.warn('KaTeX error:', e);
    }
  }

  chatScroll.scrollTop = chatScroll.scrollHeight;
  return wrap;
}

function escapeHtml(s){
  const d = document.createElement('div');
  d.textContent = s;
  return d.innerHTML;
}

// ============================================================
// 10. SEND MESSAGE
// ============================================================
let chatHistory = [];
let zoyAttachedFiles = [];

function sendMsg(){
  const text = composerInput.value.trim();
  if(!text && zoyAttachedFiles.length === 0) return;
  if(getTokens()<=0 && state.guest){guestGate.classList.add('show'); return;}
  
  // 1. Ambil file terlampir
  const filesToSend = [...zoyAttachedFiles];

  // 2. Filter file non-gambar untuk teks lampiran
  let displayMsg = text;
  const nonImageFiles = filesToSend.filter(f => {
    const fileObj = f.file || f;
    const type = fileObj.type || f.type || '';
    return !type.startsWith('image/');
  });

  if (nonImageFiles.length > 0) {
    const fileNames = nonImageFiles.map(f => f.name || f.file?.name).join(', ');
    displayMsg += (text ? '\n\n' : '') + '◆ Attached files: ' + fileNames;
  }
  
  // 3. Tampilkan pesan user ke bubble chat (beserta preview foto)
  addMsg('user', escapeHtml(displayMsg), filesToSend);

  // 4. Simpan ke histori riwayat lokal
  state.currentMessages.push({role:'user', content:displayMsg});
  chatHistory.push({role:'user', content:displayMsg});
  
  // 5. Bersihkan attachment di input box
  zoyAttachedFiles = [];
  zoyRenderAttachments();
  
  composerInput.value = '';
  composerInput.style.height = 'auto';
  
  if(!useToken()&&state.guest) setTimeout(()=>guestGate.classList.add('show'),500);
  renderToken();
  
  const typing = addMsg('ai','<span class="zoy-typing"><span></span><span></span><span></span></span>');
  
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  const plan = tokenState.plan || 'free';
  const userId = state.userId || 'guest_' + Date.now();
  
  // SESUDAH (yang benar):
const formData = new FormData();
formData.append('message', text);
formData.append('user_id', userId);
formData.append('plan', plan);
formData.append('history', JSON.stringify(chatHistory.slice(-5)));
formData.append('is_web_search', isWebSearchActive ? '1' : '0');
  
// PERBAIKAN PADA sendMsg():
filesToSend.forEach((fileObj, index) => {
  const actualFile = fileObj.file || fileObj;
  const fileName = fileObj.name || actualFile.name || `file_${index}`;
  if (actualFile instanceof Blob || actualFile instanceof File) {
    formData.append('files[' + index + ']', actualFile, fileName);
  }
});

fetch('/api/chat', {
  method: 'POST',
  headers: {
    'X-CSRF-TOKEN': csrfToken,
    'X-Plan': plan,
    'Accept': 'application/json' // Memastikan Laravel merespon dengan format JSON
  },
  body: formData
})
.then(async response => {
  // Cek apakah server mengembalikan JSON atau teks biasa/HTML
  const contentType = response.headers.get('content-type');
  const isJson = contentType && contentType.includes('application/json');
  const data = isJson ? await response.json() : await response.text();

  if (!response.ok) {
    const errorMsg = typeof data === 'object' ? (data.message || data.error) : data;
    throw new Error(`HTTP ${response.status}: ${errorMsg || 'Server Error'}`);
  }
  return data;
})
.then(data => {
  if (data.status === 'success') {
  // Parse balasan Gemini menggunakan marked
  const bubbleEl = typing.querySelector('.bubble');
if (bubbleEl) {
  let content = data.message || 'No response from AI.';
  
  // 1. Normalisasi delimiter dari Gemini
  content = content.replace(/\\\(/g, '$').replace(/\\\)/g, '$').replace(/\\\[/g, '$$').replace(/\\\]/g, '$$');
  
  // 2. Simpan rumus ke array, ganti dengan placeholder tanpa underscore (aman dari marked.js)
  const mathBlocks = [];
  content = content.replace(/(\$\$[\s\S]*?\$\$|\$[^$\n]+?\$)/g, (m) => { 
    mathBlocks.push(m); 
    return `ZOYMATHBLOCK${mathBlocks.length - 1}END`; 
  });
  
  // 3. Render Markdown
  if (typeof marked !== 'undefined') {
    content = marked.parse(content);
  }
  
  // 4. Kembalikan rumus asli
  content = content.replace(/ZOYMATHBLOCK(\d+)END/g, (_, id) => mathBlocks[parseInt(id)] || '');
  
  bubbleEl.innerHTML = content;
  
  // 5. Render KaTeX
  if (window.renderMathInElement) {
    try {
      renderMathInElement(bubbleEl, {
        delimiters: [
          {left: '$$', right: '$$', display: true},
          {left: '$', right: '$', display: false}
        ],
        throwOnError: false
      });
    } catch(e) {
      console.warn('KaTeX Error:', e);
    }
  }
}
        // Deteksi otomatis kalau user minta file via chat
  const userText = text.toLowerCase();
  if (userText.includes('excel') || userText.includes('word') || userText.includes('pdf')) {
    const fileType = userText.includes('word') ? 'word' : 'excel';
    window.zoyRequestFileGeneration(fileType, 'RAB_Hasil_Chat', []);
  }
    
    if (data.ai_info) {
      const info = document.createElement('div');
      info.style.cssText = 'font-size:10px;color:var(--zoy-muted2);margin-top:4px;';
      info.textContent = `◆ ${data.ai_info.service} (Accuracy ${data.ai_info.accuracy}%)`;
      typing.querySelector('.bubble').appendChild(info);
    }

if (data.rab_data) {
  updateRabView(data.rab_data);
  state.chatHistory.unshift({
    id: 'h' + Date.now(),
    title: data.rab_data.project_name || 'RAB',
    date: new Date().toLocaleString(),
    messages: [
      {role: 'user', content: displayMsg}, // ✅ SUDAH BENAR
      {role: 'assistant', content: data.message}
    ]
  });
  renderHistory();
  renderProjects();
  showNotification('✓ RAB saved to database!', 'success');
}
    
    state.currentMessages.push({role:'assistant', content:data.message});
    chatHistory.push({role:'assistant', content:data.message});
    saveChatToHistory();
  } else {
    typing.querySelector('.bubble').innerHTML = '⚠️ ' + (data.message || 'An error occurred.');
  }
  chatScroll.scrollTop = chatScroll.scrollHeight;
})
.catch(error => {
  console.error('Error Detail:', error);
  // Menampilkan status error transparan (misal HTTP 404, 419, atau 500) langsung di bubble
  typing.querySelector('.bubble').innerHTML = '⚠️ ' + error.message;
  chatScroll.scrollTop = chatScroll.scrollHeight;
});
}

function saveChatToHistory() {
  if(state.currentMessages.length > 1){
    let existing = state.chatHistory.find(c => c.id === state.currentChatId);
    if(!existing) {
      const first = state.currentMessages.find(m => m.role === 'user');
      const title = first ? first.content.substring(0, 40) + (first.content.length > 40 ? '...' : '') : 'New Chat';
      const newChat = {
        id: 'h' + Date.now(),
        title: title,
        date: new Date().toLocaleString(),
        messages: state.currentMessages.slice()
      };
      state.chatHistory.unshift(newChat);
      state.currentChatId = newChat.id;
    } else {
      existing.messages = state.currentMessages.slice();
      existing.date = new Date().toLocaleString();
    }
    renderHistory();
  }
}

function updateRabView(rabData) {
  if (!rabData || !rabData.items) return;
  state.rabRows = [];
  rabData.items.forEach(item => {
    addRabRow({
      desc: item.description,
      material: item.material || '',
      volume: item.volume || 0,
      unit: item.unit || 'pcs',
      qty: item.qty || 1,
      matPrice: item.mat_price || 0,
      labor: item.labor || 0
    });
  });
  updateRabSummary();
}

function showNotification(message, type) {
  const colors = {
    success: 'var(--zoy-green)',
    error: 'var(--zoy-red)',
    info: 'var(--zoy-blue)',
    warning: 'var(--zoy-yellow)'
  };
  const notification = document.createElement('div');
  notification.className = 'zoy-notification';
  notification.style.borderLeftColor = colors[type] || colors.info;
  notification.textContent = message;
  document.body.appendChild(notification);
  setTimeout(() => {
    notification.style.opacity = '0';
    notification.style.transform = 'translateX(100px)';
    notification.style.transition = 'all 0.5s ease';
    setTimeout(() => notification.remove(), 500);
  }, 3000);
}

document.getElementById('zoySendBtn').addEventListener('click',sendMsg);
composerInput.addEventListener('keydown',(e)=>{if(e.key==='Enter'&&!e.shiftKey){e.preventDefault(); sendMsg();}});
composerInput.addEventListener('input',function(){this.style.height='auto'; this.style.height=Math.min(this.scrollHeight,120)+'px';});
document.querySelectorAll('.zoy-suggest-chip').forEach(chip=>{
  chip.addEventListener('click',()=>{composerInput.value=chip.dataset.fill; sendMsg();});
});

// ============================================================
// 11. HISTORY SYSTEM
// ============================================================
function loadChat(chatId){
  const chat = state.chatHistory.find(c=>c.id===chatId);
  if(!chat) return;
  
  state.currentChatId = chatId;
  state.currentMessages = chat.messages || [];
  
  // Sinkronkan memory percakapan yang dikirim ke API Gemini
// Di dalam fungsi loadChat(chatId):
chatHistory = state.currentMessages.map(m => ({
  role: (m.role === 'assistant' || m.role === 'ai') ? 'assistant' : 'user',
  content: m.content
}));

  const inner = document.getElementById('zoyChatInner');
  inner.innerHTML = '';
  
  if(state.currentMessages.length === 0){
    inner.innerHTML = document.getElementById('zoyChatEmpty').outerHTML;
  } else {
    state.currentMessages.forEach(msg => {
      // Pastikan role AI dirender sebagai 'ai'
      const roleName = (msg.role === 'assistant' || msg.role === 'ai') ? 'ai' : 'user';
      addMsg(roleName, msg.content);
    });
  }
  
  document.getElementById('zoyTopTitle').textContent = chat.title || 'Chat';
  document.getElementById('zoyTopSub').textContent = `${chat.messages.length} messages · ${chat.date}`;
  chatScroll.scrollTop = chatScroll.scrollHeight;
  renderHistory();
}
  
function renameChat(id, newTitle) {
  const chat = state.chatHistory.find(c => c.id === id);
  if (chat) {
    chat.title = newTitle;
    
    // Tambahan: Update judul di topbar jika chat yang di-rename sedang dibuka
    if (state.currentChatId === id) {
      document.getElementById('zoyTopTitle').textContent = newTitle;
    }
    
    renderHistory();
  }
}

function deleteChat(id) {
  state.chatHistory = state.chatHistory.filter(c => c.id !== id);
  if (state.currentChatId === id) {
    document.getElementById('zoyNewChat').click();
  }
  renderHistory();
}

function renderHistory(){
  const list = document.getElementById('zoyHistoryList');
  const mini = document.getElementById('zoySbHistory');
  if(!list || !mini) return;
  
  list.innerHTML = ''; 
  mini.innerHTML = '';
  
  if(state.chatHistory.length === 0){
    mini.innerHTML = '<p style="color:var(--zoy-muted2);font-size:0.6875rem;padding:0.5rem;text-align:center;">No chat history</p>';
    list.innerHTML = '<p style="color:var(--zoy-muted2);text-align:center;padding:2.5rem;">No chat history yet. Start a new chat!</p>';
    return;
  }
  
  state.chatHistory.forEach(chat => {
    // 1. Tampilan di Tab History Utama
    const row = document.createElement('article');
    row.className = 'zoy-hist-row';
    row.innerHTML = `
      <span class="icon">◈</span>
      <div class="meta">
        <p class="title">${escapeHtml(chat.title)}</p>
        <p class="cat">${chat.messages.length} messages · ${chat.date}</p>
      </div>
      <div class="actions">
        <button class="zoy-icon-btn btn-rename">✎</button>
        <button class="zoy-icon-btn btn-delete">✕</button>
      </div>`;
    
    row.querySelector('.meta').addEventListener('click', () => {
      loadChat(chat.id);
      document.querySelector('.zoy-sb-item[data-view="chat"]').click();
    });
    row.querySelector('.btn-rename').addEventListener('click', (e) => {
      e.stopPropagation();
      const t = prompt('Rename:', chat.title);
      if(t && t.trim()) renameChat(chat.id, t.trim());
    });
    row.querySelector('.btn-delete').addEventListener('click', (e) => {
      e.stopPropagation();
      if(confirm('Delete chat?')) deleteChat(chat.id);
    });
    
    list.appendChild(row);

    // 2. Tampilan di Sidebar Kiri (Mini History)
    const a = document.createElement('a');
    a.href = 'javascript:void(0)';
    a.style.cursor = 'pointer';
    if(chat.id === state.currentChatId) {
      a.style.background = 'rgba(255,255,255,0.08)';
      a.style.color = 'var(--zoy-text)';
    }
    a.innerHTML = `<span style="pointer-events:none;">${escapeHtml(chat.title)}</span><span style="font-size:0.5625rem;color:var(--zoy-muted2);pointer-events:none;">${chat.messages.length}</span>`;
    
    a.addEventListener('click', (e) => {
      e.preventDefault();
      loadChat(chat.id);
      document.querySelector('.zoy-sb-item[data-view="chat"]').click();
    });
    
    mini.appendChild(a);
  });
}
document.getElementById('zoyHistoryNewChatBtn')?.addEventListener('click', function() {
  // Trigger klik tombol New Chat utama yang sudah kita perbaiki sebelumnya
  document.getElementById('zoyNewChat')?.click();
});

// ============================================================
// 12. PROJECTS SYSTEM
// ============================================================
function renderProjects(){
  const list = document.getElementById('zoyProjectList');
  list.innerHTML = '';
  
  const limit = {free:{maxProjects:3,maxFiles:5}, pro:{maxProjects:30,maxFiles:10}, premium:{maxProjects:Infinity,maxFiles:Infinity}};
  const plan = tokenState.plan||'free';
  const lim = limit[plan]||limit.free;
  const planName = plan.charAt(0).toUpperCase()+plan.slice(1);
  
  if(state.projects.length === 0){
    list.innerHTML = `<p style="color:var(--zoy-muted2);text-align:center;padding:2.5rem;">▣ No projects yet.<br><span style="font-size:0.75rem;">Click "New Project" to create.</span><br><span style="font-size:0.6875rem;color:var(--zoy-muted2);">${planName}: 0 / ${lim.maxProjects===Infinity?'∞':lim.maxProjects}</span></p>`;
    return;
  }
  
  state.projects.forEach(p=>{
    const row = document.createElement('article');
    row.className = 'zoy-hist-row';
    row.style.flexDirection = 'column'; row.style.alignItems = 'stretch'; row.style.padding = '1rem';
    row.innerHTML = `
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:0.5rem;">
        <span style="font-size:1rem;font-weight:600;font-family:var(--zoy-font-d);">▣ ${p.name}</span>
        <span style="font-size:0.6875rem;color:var(--zoy-muted2);">${p.date} · ${p.files.length} / ${lim.maxFiles===Infinity?'∞':lim.maxFiles} files</span>
      </div>
      <div style="display:flex;flex-wrap:wrap;gap:0.5rem;margin-top:0.375rem;">
        ${p.files.length===0?'<span style="font-size:0.75rem;color:var(--zoy-muted2);padding:0.25rem 0;">◆ No files</span>':
        p.files.map(f=>`<span style="display:flex;align-items:center;gap:0.375rem;padding:0.25rem 0.75rem;background:rgba(59,130,246,0.08);border:1px solid var(--zoy-line);border-radius:0.375rem;font-size:0.75rem;cursor:pointer;" onclick="alert('Download: ${f.name}')">${f.icon} ${f.name} (${f.size})</span>`).join('')}
      </div>
      <div style="display:flex;flex-wrap:wrap;gap:0.5rem;margin-top:0.625rem;border-top:1px solid var(--zoy-line);padding-top:0.625rem;">
        <button class="zoy-btn-sm ghost" onclick="uploadFile('${p.id}')" style="font-size:0.6875rem;">◈ Upload</button>
        <button class="zoy-btn-sm ghost" onclick="zoyDownloadProjectExcel('${p.id}')" style="font-size:0.6875rem;color:var(--zoy-green);">▣ Excel</button>
        <button class="zoy-btn-sm ghost" onclick="zoyDownloadProjectPdf('${p.id}')" style="font-size:0.6875rem;color:var(--zoy-red);">■ PDF</button>
        <button class="zoy-btn-sm ghost" style="font-size:0.6875rem;color:var(--zoy-red);" onclick="if(confirm('Delete ${p.name}?')){state.projects=state.projects.filter(x=>x.id!=='${p.id}');renderProjects();}">✕</button>
      </div>
    `;
    list.appendChild(row);
  });
}

function uploadFile(projectId){
  const p = state.projects.find(x=>x.id===projectId);
  if(!p) return;
  const plan = tokenState.plan||'free';
  const maxFiles = {free:5, pro:10, premium:Infinity}[plan]||5;
  if(p.files.length>=maxFiles){
    alert(`File limit reached (${maxFiles} files). Upgrade plan for more.`);
    return;
  }
  const files = [{name:'RAB_Update.xlsx',size:'156 KB',icon:'▣'},{name:'Technical_Drawing.pdf',size:'3.4 MB',icon:'■'},{name:'Purchase_Note.docx',size:'45 KB',icon:'◆'}];
  const newFile = files[Math.floor(Math.random()*files.length)];
  p.files.push(newFile);
  renderProjects();
  alert(`File "${newFile.name}" uploaded to "${p.name}"`);
}

document.getElementById('zoyNewProject').addEventListener('click',()=>{
  const plan = tokenState.plan||'free';
  const maxProjects = {free:3, pro:30, premium:Infinity}[plan]||3;
  if(state.projects.length>=maxProjects){
    alert(`Project limit ${plan} reached (${maxProjects}). Upgrade plan.`);
    return;
  }
  const name = prompt('▣ Project Name:');
  if(name && name.trim()){
    state.projects.unshift({id:'p'+Date.now(), name:name.trim(), date:new Date().toLocaleString(), files:[]});
    renderProjects();
    if(confirm(`Project "${name.trim()}" created! Upload files?`)) uploadFile(state.projects[0].id);
  }
});

// ============================================================
// 13. RAB CALCULATOR
// ============================================================
const rabBody = document.getElementById('zoyRabBody');

function addRabRow(vals){
  state.rabSeq++;
  const id = 'r'+state.rabSeq;
  const row = Object.assign({id, desc:'', material:'', volume:0, unit:'m³', qty:1, matPrice:0, labor:0}, vals||{});
  state.rabRows.push(row);
  renderRab();
}

function renderRab(){
  rabBody.innerHTML = '';
  state.rabRows.forEach((row,i)=>{
    const unitPrice = (Number(row.matPrice)||0) + (Number(row.labor)||0);
    const total = unitPrice * (Number(row.qty)||1) * (Number(row.volume)||1);
    row.unitPrice = unitPrice; row.total = total;
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td>${i+1}</td>
      <td><input data-f="desc" value="${row.desc}" placeholder="Excavation"></td>
      <td><input data-f="material" value="${row.material}" placeholder="Cement"></td>
      <td><input data-f="volume" type="number" value="${row.volume}"></td>
      <td>
        <select data-f="unit" class="zoy-unit-select" style="width:100%;background:rgba(255,255,255,0.03);border:1px solid var(--zoy-line);border-radius:0.375rem;color:var(--zoy-text);padding:0.3125rem 0.375rem;font-size:0.75rem;font-family:inherit;">
          <option value="m³" ${row.unit === 'm³' ? 'selected' : ''}>m³</option>
          <option value="m²" ${row.unit === 'm²' ? 'selected' : ''}>m²</option>
          <option value="m'" ${row.unit === "m'" ? 'selected' : ''}>m'</option>
          <option value="kg" ${row.unit === 'kg' ? 'selected' : ''}>kg</option>
          <option value="sack" ${row.unit === 'sack' ? 'selected' : ''}>sack</option>
          <option value="pcs" ${row.unit === 'pcs' ? 'selected' : ''}>pcs</option>
          <option value="batang" ${row.unit === 'batang' ? 'selected' : ''}>batang</option>
          <option value="dus" ${row.unit === 'dus' ? 'selected' : ''}>dus</option>
          <option value="roll" ${row.unit === 'roll' ? 'selected' : ''}>roll</option>
          <option value="lembar" ${row.unit === 'lembar' ? 'selected' : ''}>lembar</option>
          <option value="trip" ${row.unit === 'trip' ? 'selected' : ''}>trip</option>
          <option value="paket" ${row.unit === 'paket' ? 'selected' : ''}>paket</option>
          <option value="ton" ${row.unit === 'ton' ? 'selected' : ''}>ton</option>
          <option value="liter" ${row.unit === 'liter' ? 'selected' : ''}>liter</option>
          <option value="galon" ${row.unit === 'galon' ? 'selected' : ''}>galon</option>
          <option value="buah" ${row.unit === 'buah' ? 'selected' : ''}>buah</option>
          <option value="set" ${row.unit === 'set' ? 'selected' : ''}>set</option>
        </select>
      </td>
      <td><input data-f="qty" type="number" value="${row.qty}"></td>
      <td><input data-f="matPrice" type="number" value="${row.matPrice}"></td>
      <td><input data-f="labor" type="number" value="${row.labor}"></td>
      <td style="font-family:var(--zoy-font-m);color:var(--zoy-muted);padding:0 0.375rem;">${fmtRp(unitPrice)}</td>
      <td class="zoy-rab-total">${fmtRp(total)}</td>
      <td><button class="zoy-row-del" data-id="${row.id}">✕</button></td>
    `;
    
    tr.querySelector('select[data-f="unit"]').addEventListener('change', function() {
      row.unit = this.value;
      renderRab();
    });
    
    tr.querySelectorAll('input').forEach(inp=>{
      inp.addEventListener('input',()=>{
        row[inp.dataset.f] = inp.dataset.f==='desc'||inp.dataset.f==='material' ? inp.value : Number(inp.value);
        renderRab();
      });
    });
    tr.querySelector('.zoy-row-del').addEventListener('click',()=>{
      state.rabRows = state.rabRows.filter(r=>r.id!==row.id);
      renderRab();
    });
    rabBody.appendChild(tr);
  });
  updateRabSummary();
}

function updateRabSummary(){
  const sub = state.rabRows.reduce((s,r)=>s+(r.total||0),0);
  const ohPct = Number(document.getElementById('zoyRabOverhead').value)||0;
  const taxPct = Number(document.getElementById('zoyRabTax').value)||0;
  const oh = sub*ohPct/100;
  const tax = (sub+oh)*taxPct/100;
  document.getElementById('zoyRabSubtotal').textContent = fmtRp(sub);
  document.getElementById('zoyRabOverheadVal').textContent = fmtRp(oh);
  document.getElementById('zoyRabTaxVal').textContent = fmtRp(tax);
  document.getElementById('zoyRabGrand').textContent = fmtRp(sub+oh+tax);
}

function fmtRp(n){
  if(!isFinite(n)) return 'Rp 0';
  return 'Rp ' + Math.round(n).toLocaleString('id-ID');
}

document.getElementById('zoyRabAdd').addEventListener('click',()=>addRabRow());
document.getElementById('zoyRabOverhead').addEventListener('input',updateRabSummary);
document.getElementById('zoyRabTax').addEventListener('input',updateRabSummary);

document.getElementById('zoyRabSave').addEventListener('click', () => {
  const title = 'RAB — ' + (state.rabRows[0]?.desc || 'Untitled');
  
  // Perbaikan: gunakan state (s kecil)
  state.chatHistory.unshift({
    id: 'h' + Date.now(),
    title: title,
    date: new Date().toLocaleString(),
    messages: state.currentMessages.slice()
  });
  
  renderHistory();
  document.getElementById('zoyRabSave').textContent = '✓ Saved';
  setTimeout(() => document.getElementById('zoyRabSave').textContent = 'Save to History', 1500);
});

// ============================================================
// 14. VOLUME CALCULATOR
// ============================================================
document.getElementById('zoyVolType').addEventListener('change',()=>{
  const type = document.getElementById('zoyVolType').value;
  const field = document.getElementById('zoyVolHeightField');
  const label = field.querySelector('label');
  if(type==='floor'){field.style.display='none';}else{field.style.display='flex'; label.textContent=type==='wall'?'Height':type==='excavation'?'Depth':'Height';}
  computeVol();
});

function computeVol(){
  const type = document.getElementById('zoyVolType').value;
  const L = Number(document.getElementById('zoyVolLength').value)||0;
  const W = Number(document.getElementById('zoyVolWidth').value)||0;
  const H = Number(document.getElementById('zoyVolHeight').value)||0;
  let val = 0, unit = 'm³', label = 'Volume';
  if(type==='wall'){val = L*H; unit = 'm²'; label = 'Wall area';}
  else if(type==='floor'){val = L*W; unit = 'm²'; label = 'Floor area';}
  else if(type==='excavation'){val = L*W*H; unit = 'm³'; label = 'Excavation';}
  else {val = L*W*H; unit = 'm³'; label = type==='foundation'?'Foundation':'Concrete';}
  document.getElementById('zoyVolResultLabel').textContent = label;
  document.getElementById('zoyVolResultVal').textContent = val.toFixed(3).replace(/\.?0+$/,'')+' '+unit;
  return {val,unit,label};
}

['zoyVolLength','zoyVolWidth','zoyVolHeight'].forEach(id=>document.getElementById(id).addEventListener('input',computeVol));
computeVol();

document.getElementById('zoyVolToRab').addEventListener('click',()=>{
  const r = computeVol();
  addRabRow({desc:document.getElementById('zoyVolType').selectedOptions[0].text, volume:r.val, unit:r.unit, qty:1});
  document.querySelector('.zoy-sb-item[data-view="rab"]').click();
});

// ============================================================
// 15. MATERIAL CALCULATOR + MASPETRUK
// ============================================================
function calcMatTotal(){
  const qty = Number(document.getElementById('zoyMatQty').value)||0;
  const price = Number(document.getElementById('zoyMatPrice').value)||0;
  document.getElementById('zoyMatTotal').textContent = fmtRp(qty*price);
}

document.getElementById('zoyMatLoadMaspetruk').addEventListener('click',function(){
  const data = [
    {name:'Semen Padang 40kg', unit:'sack', price:58000, spec:'Merk Semen Padang, 40kg/sack, Kualitas Ekonomis'},
    {name:'Semen Tiga Roda 50kg', unit:'sack', price:72000, spec:'Merk Semen Tiga Roda, 50kg/sack, Kualitas Standar'},
    {name:'Semen Dynamix 50kg', unit:'sack', price:95000, spec:'Merk Semen Dynamix, 50kg/sack, Kualitas Premium'},
    {name:'Besi Beton Polos Ø6mm', unit:'batang', price:48000, spec:'Besi Polos, Diameter 6mm, Panjang 12m, SNI'},
    {name:'Besi Beton Polos Ø8mm', unit:'batang', price:65000, spec:'Besi Polos, Diameter 8mm, Panjang 12m, SNI'},
    {name:'Besi Beton Ulir Ø10mm', unit:'batang', price:85000, spec:'Besi Ulir, Diameter 10mm, Panjang 12m, SNI'},
    {name:'Besi Beton Ulir Ø12mm', unit:'batang', price:115000, spec:'Besi Ulir, Diameter 12mm, Panjang 12m, SNI'},
    {name:'Besi Beton Ulir Ø16mm', unit:'batang', price:185000, spec:'Besi Ulir, Diameter 16mm, Panjang 12m, SNI'},
    {name:'Besi Krakatau Steel Ø12mm', unit:'batang', price:135000, spec:'Merk Krakatau Steel, Ulir, Diameter 12mm, Premium'},
    {name:'Keramik Polos 30x30', unit:'dus', price:45000, spec:'Keramik Polos, 30x30cm, 1 dus = 1.08m², Ekonomis'},
    {name:'Keramik Motif 40x40', unit:'dus', price:85000, spec:'Keramik Motif, 40x40cm, 1 dus = 1.44m², Standar'},
    {name:'Granit Tile 60x60', unit:'dus', price:250000, spec:'Granit Tile, 60x60cm, 1 dus = 1.44m², Premium'},
    {name:'Kayu Sengon Balok 4x6x400cm', unit:'batang', price:85000, spec:'Kayu Sengon, 4x6x400cm, Lokal, Ekonomis'},
    {name:'Kayu Meranti 5x7x400cm', unit:'batang', price:185000, spec:'Kayu Meranti, 5x7x400cm, Kualitas Standar'},
    {name:'Kayu Jati Perhutani 6x12x400cm', unit:'batang', price:450000, spec:'Kayu Jati Perhutani, 6x12x400cm, Premium'},
    {name:'Plywood 9mm', unit:'lembar', price:120000, spec:'Plywood, 120x240cm, Tebal 9mm'},
    {name:'Plywood 12mm', unit:'lembar', price:175000, spec:'Plywood, 120x240cm, Tebal 12mm'},
    {name:'Bata Merah Lokal', unit:'pcs', price:1200, spec:'Bata Merah, 5x10x20cm, Lokal, Ekonomis'},
    {name:'Bata Ringan Hebel 10cm', unit:'pcs', price:2500, spec:'Bata Ringan Hebel, 10x20x60cm, Standar'},
    {name:'Bata Ringan Premium', unit:'pcs', price:3800, spec:'Bata Ringan Premium, 10x20x60cm, Kualitas Tinggi'},
    {name:'Pasir Kali Standard', unit:'m³', price:250000, spec:'Pasir Kali, Butiran kasar, Standard'},
    {name:'Pasir Muntilan Halus', unit:'m³', price:350000, spec:'Pasir Muntilan, Butiran halus, Kualitas Standar'},
    {name:'Pasir Beton Super', unit:'m³', price:450000, spec:'Pasir Beton Super, Butiran sangat halus, Premium'},
    {name:'Batu Belah 15-20cm', unit:'m³', price:350000, spec:'Batu Belah, Ukuran 15-20cm'},
    {name:'Batu Split 2-3cm', unit:'m³', price:425000, spec:'Batu Split, Ukuran 2-3cm'},
    {name:'Cat Dasar Avian', unit:'pail', price:250000, spec:'Cat Dasar, 20kg, Ekonomis'},
    {name:'Cat Interior Nippon Paint', unit:'pail', price:650000, spec:'Cat Interior, 20kg, Nippon Paint, Standar'},
    {name:'Cat Eksterior Dulux Weathercoat', unit:'pail', price:950000, spec:'Cat Eksterior, 20kg, Dulux Weathercoat, Premium'},
    {name:'Pipa PVC AW 1/2"', unit:'batang', price:35000, spec:'Pipa PVC AW, 1/2 inch, 4m'},
    {name:'Pipa PVC D 3"', unit:'batang', price:75000, spec:'Pipa PVC D, 3 inch, 4m'},
    {name:'Pipa PVC D 4"', unit:'batang', price:115000, spec:'Pipa PVC D, 4 inch, 4m'},
    {name:'Baja Ringan C75', unit:'batang', price:185000, spec:'Baja Ringan C75, 0.75mm, 6m'},
    {name:'Genteng Metal', unit:'lembar', price:65000, spec:'Genteng Metal, 80x150cm'},
    {name:'Genteng Beton Multiroof', unit:'pcs', price:3500, spec:'Genteng Beton Multiroof, 30x40cm'}
  ];
  
  const container = document.getElementById('zoyMaspetrukData');
  const suggest = document.getElementById('zoyMatSuggest');
  container.innerHTML = `
    <table style="width:100%;border-collapse:collapse;font-size:0.6875rem;">
      <thead>
        <tr style="background:var(--zoy-panel2);">
          <th style="padding:0.375rem 0.5rem;text-align:left;">Material</th>
          <th style="padding:0.375rem 0.5rem;text-align:left;">Unit</th>
          <th style="padding:0.375rem 0.5rem;text-align:right;">Price</th>
          <th style="padding:0.375rem 0.5rem;text-align:center;">Action</th>
        </tr>
      </thead>
      <tbody>
        ${data.map(m=>`
          <tr>
            <td style="padding:0.25rem 0.5rem;font-weight:500;">${m.name}</td>
            <td style="padding:0.25rem 0.5rem;font-size:0.625rem;color:var(--zoy-muted);">${m.unit}</td>
            <td style="padding:0.25rem 0.5rem;text-align:right;font-family:var(--zoy-font-m);">${fmtRp(m.price)}</td>
            <td style="padding:0.25rem 0.5rem;text-align:center;">
              <button class="zoy-btn-sm ghost" style="padding:0.125rem 0.5rem;font-size:0.625rem;" 
                onclick="document.getElementById('zoyMatName').value='${m.name}';
                document.getElementById('zoyMatUnit').value='${m.unit}';
                document.getElementById('zoyMatPrice').value=${m.price};
                calcMatTotal();
                document.getElementById('zoyMatSuggest').innerHTML += '<option value=\\'${m.name}\\'>';">
                Select
              </button>
            </td>
          </tr>
        `).join('')}
      </tbody>
    </table>
    <p style="text-align:center;font-size:0.625rem;color:var(--zoy-muted2);padding:0.5rem;">
      ◆ ${data.length} materials from MASPETRUK Jawa Tengah
    </p>
  `;
  suggest.innerHTML = data.map(m=>`<option value="${m.name}">`).join('');
  this.textContent = '✓ Loaded';
  setTimeout(()=>this.textContent='▣ Load MASPETRUK',2000);
});

document.getElementById('zoyMatAddToRab').addEventListener('click',function(){
  const name = document.getElementById('zoyMatName').value.trim();
  const unit = document.getElementById('zoyMatUnit').value;
  const qty = Number(document.getElementById('zoyMatQty').value)||0;
  const price = Number(document.getElementById('zoyMatPrice').value)||0;
  if(!name||qty<=0){alert('Fill name and quantity!'); return;}
  addRabRow({desc:name, material:name, volume:qty, unit:unit, qty:1, matPrice:price, labor:0});
  this.textContent = '✓ Added!';
  setTimeout(()=>this.textContent='＋ Add to RAB',1500);
  document.querySelector('.zoy-sb-item[data-view="rab"]').click();
});

['zoyMatQty','zoyMatPrice'].forEach(id=>document.getElementById(id).addEventListener('input',calcMatTotal));

// ============================================================
// 16. SCIENTIFIC CALCULATOR
// ============================================================
let sciDisplay = document.getElementById('zoySciDisplay');
let sciExpr = '', sciMem = 0;

function sciUpdate(v){sciDisplay.textContent = v||'0';}
function sciAppend(v){if(sciExpr==='0'&&v!=='.')sciExpr=''; sciExpr+=v; sciUpdate(sciExpr);}
function sciClear(){sciExpr=''; sciUpdate('0');}
function sciBack(){sciExpr=sciExpr.slice(0,-1); sciUpdate(sciExpr||'0');}

function sciEval(){
  try{
    let expr = sciExpr.replace(/×/g,'*').replace(/÷/g,'/').replace(/−/g,'-')
      .replace(/sin\(/g,'Math.sin(').replace(/cos\(/g,'Math.cos(').replace(/tan\(/g,'Math.tan(')
      .replace(/asin\(/g,'Math.asin(').replace(/acos\(/g,'Math.acos(').replace(/atan\(/g,'Math.atan(')
      .replace(/log\(/g,'Math.log10(').replace(/ln\(/g,'Math.log(').replace(/sqrt\(/g,'Math.sqrt(')
      .replace(/exp\(/g,'Math.exp(').replace(/π/g,Math.PI).replace(/e(?![xp])/g,Math.E)
      .replace(/pow2/g,'**2').replace(/pow3/g,'**3');
    if(expr.includes('factorial')){
      const m = expr.match(/factorial\((\d+)\)/);
      if(m){let n=parseInt(m[1]), r=1; for(let i=2;i<=n;i++) r*=i; expr=expr.replace(/factorial\(\d+\)/,r);}
    }
    const result = Function('"use strict";return('+expr+')')();
    sciExpr = String(result); sciUpdate(result); return result;
  }catch(e){sciUpdate('Error'); setTimeout(sciClear,1200); return null;}
}

document.querySelectorAll('#zoyView-scientific .zoy-calc-btn').forEach(btn=>{
  btn.addEventListener('click',function(){
    const a = this.dataset.action;
    switch(a){
      case'equals':sciEval(); break; case'clear':sciClear(); break; case'backspace':sciBack(); break;
      case'add':sciAppend('+'); break; case'subtract':sciAppend('-'); break;
      case'multiply':sciAppend('×'); break; case'divide':sciAppend('÷'); break;
      case'sin':case'cos':case'tan':case'asin':case'acos':case'atan':case'log':case'ln':case'sqrt':case'exp':sciAppend(a+'('); break;
      case'pow2':sciAppend('pow2'); break; case'pow3':sciAppend('pow3'); break; case'factorial':sciAppend('factorial('); break;
      case'pi':sciAppend('π'); break; case'e':sciAppend('e'); break; case'percent':sciAppend('%'); break;
      case'ms':sciMem=parseFloat(sciExpr)||0; break; case'mr':sciExpr=String(sciMem); sciUpdate(sciExpr); break; case'mc':sciMem=0; break;
      case'left':sciAppend('('); break; case'right':sciAppend(')'); break; case'decimal':sciAppend('.'); break;
      default:sciAppend(a);
    }
  });
});

document.getElementById('zoySciApplyToMat').addEventListener('click',function(){
  const val = document.getElementById('zoySciResultToMat').value;
  if(val&&!isNaN(val)){document.getElementById('zoyMatQty').value=val; calcMatTotal(); document.querySelector('.zoy-sb-item[data-view="material"]').click();}
});

// ============================================================
// 17. COST ESTIMATION
// ============================================================
function calcCost(){
  const type = document.getElementById('zoyCostType').value;
  const area = Number(document.getElementById('zoyCostArea').value)||0;
  const floors = Number(document.getElementById('zoyCostFloors').value)||1;
  const finish = document.getElementById('zoyCostFinish').value;
  
  const rates = {
    house: { basic: 3500000, standard: 4500000, premium: 6500000 },
    office: { basic: 4000000, standard: 5500000, premium: 8000000 },
    warehouse: { basic: 2500000, standard: 3500000, premium: 5000000 },
    road: { basic: 1200000, standard: 1800000, premium: 2500000 }
  };
  
  const total = (rates[type]?.[finish]||4500000) * area * floors;
  document.getElementById('zoyCostResult').textContent = fmtRp(total);
  document.getElementById('zoyCostNote').textContent = `${type} ${finish} · ${area}m² × ${floors} floors`;
  
  if (area > 0) {
    showCostDetail(type, area, floors, finish);
  } else {
    document.getElementById('zoyCostDetailContainer').style.display = 'none';
  }
}

function showCostDetail(type, area, floors, finish) {
  const container = document.getElementById('zoyCostDetailContainer');
  const tableContainer = document.getElementById('zoyCostDetailTable');
  
  const rates = {
    house: { basic: 3500000, standard: 4500000, premium: 6500000 },
    office: { basic: 4000000, standard: 5500000, premium: 8000000 },
    warehouse: { basic: 2500000, standard: 3500000, premium: 5000000 },
    road: { basic: 1200000, standard: 1800000, premium: 2500000 }
  };
  
  // 1. Total Biaya Bangunan Realistis
  const totalBuildingCost = (rates[type]?.[finish] || 4500000) * area * floors;
  
  // Alokasi Biaya Bahan Bangunan (60% dari Total Biaya Bangunan)
  const totalMaterialBudget = totalBuildingCost * 0.60;

  // 2. Database Bahan Lengkap Berdasarkan Finish Level (Basic, Standard, Premium)
  const materialDatabase = {
    basic: [
      { name: 'Semen Padang 40kg', unit: 'sack', share: 0.12, price: 58000 },
      { name: 'Pasir Pasang Kali', unit: 'm³', share: 0.10, price: 250000 },
      { name: 'Batu Belah (Pondasi)', unit: 'm³', share: 0.06, price: 350000 },
      { name: 'Bata Merah Lokal', unit: 'pcs', share: 0.11, price: 1200 },
      { name: 'Besi Beton Polos Ø8mm', unit: 'batang', share: 0.10, price: 65000 },
      { name: 'Batu Split 2/3', unit: 'm³', share: 0.05, price: 425000 },
      { name: 'Keramik Polos 30x30', unit: 'dus', share: 0.08, price: 45000 },
      { name: 'Kayu Sengon Balok 4x6', unit: 'batang', share: 0.05, price: 85000 },
      { name: 'Atap Genteng Gelombang', unit: 'lembar', share: 0.07, price: 45000 },
      { name: 'Plywood 9mm (Plafond)', unit: 'lembar', share: 0.04, price: 120000 },
      { name: 'Cat Dasar Avian', unit: 'pail', share: 0.04, price: 250000 },
      { name: 'Pipa PVC AW 1/2" (Air)', unit: 'batang', share: 0.03, price: 35000 },
      { name: 'Kabel Listrik NYM 2x1.5mm', unit: 'roll', share: 0.04, price: 220000 },
      { name: 'Kloset Jongkok Standar', unit: 'unit', share: 0.03, price: 180000 },
      { name: 'Pintu Kayu Lokal / Triplek', unit: 'unit', share: 0.04, price: 350000 },
      { name: 'Paku, Kawat & Material Bantu', unit: 'paket', share: 0.04, price: 500000 }
    ],
    standard: [
      { name: 'Semen Tiga Roda 50kg', unit: 'sack', share: 0.11, price: 72000 },
      { name: 'Pasir Muntilan Halus', unit: 'm³', share: 0.09, price: 350000 },
      { name: 'Batu Belah Kali Progo', unit: 'm³', share: 0.05, price: 380000 },
      { name: 'Bata Ringan Hebel 10cm', unit: 'pcs', share: 0.10, price: 2500 },
      { name: 'Besi Beton Ulir Ø10mm SNI', unit: 'batang', share: 0.11, price: 85000 },
      { name: 'Batu Split Pecah Mesin', unit: 'm³', share: 0.05, price: 450000 },
      { name: 'Keramik Motif 40x40', unit: 'dus', share: 0.08, price: 85000 },
      { name: 'Baja Ringan C75 (Kuda-kuda)', unit: 'batang', share: 0.07, price: 125000 },
      { name: 'Atap Genteng Metal Pasir', unit: 'lembar', share: 0.06, price: 65000 },
      { name: 'Gypsum Board 9mm (Plafond)', unit: 'lembar', share: 0.04, price: 85000 },
      { name: 'Cat Interior Nippon Paint', unit: 'pail', share: 0.05, price: 650000 },
      { name: 'Pipa PVC D 3" (Limbah)', unit: 'batang', share: 0.03, price: 75000 },
      { name: 'Kabel Eterna NYM 3x2.5mm', unit: 'roll', share: 0.04, price: 450000 },
      { name: 'Kloset Duduk Standar', unit: 'unit', share: 0.04, price: 850000 },
      { name: 'Pintu Panel Kayu Meranti', unit: 'unit', share: 0.05, price: 850000 },
      { name: 'Aksesoris, Baut & Material Bantu', unit: 'paket', share: 0.03, price: 750000 }
    ],
    premium: [
      { name: 'Semen Dynamix 50kg', unit: 'sack', share: 0.10, price: 95000 },
      { name: 'Pasir Beton Super Quality', unit: 'm³', share: 0.08, price: 450000 },
      { name: 'Batu Belah Pondasi Utuh', unit: 'm³', share: 0.04, price: 420000 },
      { name: 'Bata Ringan Premium AAC', unit: 'pcs', share: 0.09, price: 3800 },
      { name: 'Besi Krakatau Steel Ø12mm', unit: 'batang', share: 0.12, price: 135000 },
      { name: 'Batu Split Screening 1/2', unit: 'm³', share: 0.05, price: 500000 },
      { name: 'Granit Tile 60x60 Premium', unit: 'dus', share: 0.10, price: 250000 },
      { name: 'Rangka Baja Ringan Heavy Duty', unit: 'batang', share: 0.06, price: 185000 },
      { name: 'Atap Genteng Beton Multiroof', unit: 'pcs', share: 0.07, price: 12000 },
      { name: 'Plafond PVC Premium Anti Air', unit: 'm²', share: 0.05, price: 180000 },
      { name: 'Cat Dulux Weathercoat Premium', unit: 'pail', share: 0.05, price: 950000 },
      { name: 'Pipa PVC Wavin/Rucika AW 4"', unit: 'batang', share: 0.03, price: 140000 },
      { name: 'Kabel Supreme NYM 3x2.5mm', unit: 'roll', share: 0.04, price: 680000 },
      { name: 'Kloset Duduk Monoblok TOTO', unit: 'unit', share: 0.04, price: 2800000 },
      { name: 'Pintu Kayu Jati Perhutani', unit: 'unit', share: 0.05, price: 2500000 },
      { name: 'Hardware, Sealant & Helper Items', unit: 'paket', share: 0.03, price: 1200000 }
    ]
  };

  const selectedMaterials = materialDatabase[finish] || materialDatabase.standard;

  let grandTotalMat = 0;
  let html = `
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Material & Merk (${finish.toUpperCase()})</th>
          <th>Satuan</th>
          <th>Quantity</th>
          <th style="text-align:right;">Harga Satuan</th>
          <th style="text-align:right;">Subtotal</th>
        </tr>
      </thead>
      <tbody>
  `;

  selectedMaterials.forEach((mat, idx) => {
    const itemBudget = totalMaterialBudget * mat.share;
    // Hitung quantity bulat tanpa pecahan desimal (.00)
    const qty = Math.max(1, Math.round(itemBudget / mat.price));
    const subtotal = qty * mat.price;
    grandTotalMat += subtotal;

    html += `
      <tr>
        <td>${idx + 1}</td>
        <td><strong>${mat.name}</strong></td>
        <td>${mat.unit}</td>
        <td><strong>${qty.toLocaleString('id-ID')}</strong></td>
        <td style="text-align:right;font-family:var(--zoy-font-m);">${fmtRp(mat.price)}</td>
        <td style="text-align:right;font-family:var(--zoy-font-m);color:var(--zoy-blue);">${fmtRp(subtotal)}</td>
      </tr>
    `;
  });

  const laborAndOverhead = totalBuildingCost - grandTotalMat;

  html += `
      </tbody>
      <tfoot>
        <tr class="total-row">
          <td colspan="5" style="text-align:right;font-weight:600;">TOTAL BELANJA MATERIAL MEWAH/FISIK (±60%)</td>
          <td style="text-align:right;font-weight:600;color:var(--zoy-blue);">${fmtRp(grandTotalMat)}</td>
        </tr>
        <tr>
          <td colspan="5" style="text-align:right;font-weight:600;color:var(--zoy-muted2);">ESTIMASI UPAH TUKANG & PROFIT KONTRAKTOR (±40%)</td>
          <td style="text-align:right;font-weight:600;color:var(--zoy-muted2);">${fmtRp(laborAndOverhead)}</td>
        </tr>
        <tr style="border-top:2px solid var(--zoy-blue);">
          <td colspan="5" style="text-align:right;font-weight:700;font-size:14px;color:var(--zoy-text);">ESTIMASI HARGA TOTAL BANGUNAN UNTUK 1 UNIT RUMAH</td>
          <td style="text-align:right;font-weight:700;font-size:14px;color:var(--zoy-green);">${fmtRp(totalBuildingCost)}</td>
        </tr>
      </tfoot>
    </table>
    <p style="font-size:0.6875rem;color:var(--zoy-muted2);padding:0.5rem;text-align:center;">
      ◆ Rincian 16 bahan otomatis disesuaikan dengan standar mutu ${finish.toUpperCase()} & luas area ${area * floors}m².
    </p>
  `;

  tableContainer.innerHTML = html;
  container.style.display = 'block';
}
 
['zoyCostType','zoyCostArea','zoyCostFloors','zoyCostFinish'].forEach(id=>{
  document.getElementById(id).addEventListener('input', calcCost);
  document.getElementById(id).addEventListener('change', calcCost);
});
calcCost();

// ============================================================
// 18. DOWNLOAD EXCEL & PDF
// ============================================================
function zoyDownloadExcel(data, filename = 'zoy-ai-data') {
  if (!data || data.length === 0) {
    alert('No data to download!');
    return;
  }
  const headers = Object.keys(data[0]);
  let csv = headers.join(',') + '\n';
  data.forEach(row => {
    const values = headers.map(header => {
      let val = row[header] || '';
      if (typeof val === 'string' && (val.includes(',') || val.includes('"') || val.includes('\n'))) {
        val = '"' + val.replace(/"/g, '""') + '"';
      }
      return val;
    });
    csv += values.join(',') + '\n';
  });
  const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
  const link = document.createElement('a');
  link.href = URL.createObjectURL(blob);
  link.download = filename + '.csv';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
  URL.revokeObjectURL(link.href);
  alert(`File ${filename}.csv downloaded successfully!`);
}

function zoyDownloadPDF(content, filename = 'zoy-ai-report') {
  const printWindow = window.open('', '_blank', 'width=800,height=600');
  if (!printWindow) {
    alert('Please allow popups to download PDF!');
    return;
  }
  const style = `
    <style>
      body { font-family: Arial, sans-serif; padding: 40px; background: #fff; color: #333; }
      h1 { color: #3b82f6; border-bottom: 2px solid #3b82f6; padding-bottom: 10px; }
      table { width: 100%; border-collapse: collapse; margin: 20px 0; }
      th, td { border: 1px solid #ddd; padding: 8px 12px; text-align: left; }
      th { background: #3b82f6; color: #fff; }
      .footer { margin-top: 30px; font-size: 12px; color: #999; text-align: center; border-top: 1px solid #ddd; padding-top: 20px; }
    </style>
  `;
  printWindow.document.write(`
    <!DOCTYPE html>
    <html>
    <head><title>${filename}</title>${style}</head>
    <body>
      <h1>▣ Zoy AI Report</h1>
      <p><strong>Generated:</strong> ${new Date().toLocaleString()}</p>
      ${content}
      <div class="footer">Zoy AI © 2026 · Created by ZyeeCeleste</div>
      <script>
        window.onload = function() {
          setTimeout(function() { window.print(); }, 500);
        };
      <\/script>
    </body>
    </html>
  `);
  printWindow.document.close();
}

function zoyDownloadRabExcel() {
  if (state.rabRows.length === 0) {
    alert('RAB is empty! Add items first.');
    return;
  }
  const data = state.rabRows.map((row, i) => ({
    'No': i + 1,
    'Description': row.desc || '',
    'Material': row.material || '',
    'Volume': row.volume || 0,
    'Unit': row.unit || 'm³',
    'Quantity': row.qty || 1,
    'Material Price': row.matPrice || 0,
    'Labor Cost': row.labor || 0,
    'Unit Price': row.unitPrice || 0,
    'Total': row.total || 0
  }));
  zoyDownloadExcel(data, 'zoy-rab-' + new Date().toISOString().slice(0,10));
}

function zoyDownloadRabPdf() {
  if (state.rabRows.length === 0) {
    alert('RAB is empty! Add items first.');
    return;
  }
  const subtotal = state.rabRows.reduce((s, r) => s + (r.total || 0), 0);
  const ohPct = Number(document.getElementById('zoyRabOverhead')?.value) || 10;
  const taxPct = Number(document.getElementById('zoyRabTax')?.value) || 11;
  const oh = subtotal * ohPct / 100;
  const tax = (subtotal + oh) * taxPct / 100;
  const grand = subtotal + oh + tax;
  let tableHtml = `
    <table>
      <thead><tr><th>No</th><th>Description</th><th>Material</th><th>Volume</th><th>Unit</th><th>Qty</th><th>Unit Price</th><th>Total</th></tr></thead>
      <tbody>
  `;
  state.rabRows.forEach((row, i) => {
    tableHtml += `<tr><td>${i + 1}</td><td>${row.desc || ''}</td><td>${row.material || ''}</td><td>${row.volume || 0}</td><td>${row.unit || 'm³'}</td><td>${row.qty || 1}</td><td>${fmtRp(row.unitPrice || 0)}</td><td>${fmtRp(row.total || 0)}</td></tr>`;
  });
  tableHtml += `
      </tbody>
      <tfoot>
        <tr><td colspan="7" style="text-align:right;font-weight:bold;">Subtotal</td><td>${fmtRp(subtotal)}</td></tr>
        <tr><td colspan="7" style="text-align:right;font-weight:bold;">Overhead (${ohPct}%)</td><td>${fmtRp(oh)}</td></tr>
        <tr><td colspan="7" style="text-align:right;font-weight:bold;">Tax (${taxPct}%)</td><td>${fmtRp(tax)}</td></tr>
        <tr><td colspan="7" style="text-align:right;font-weight:bold;color:#3b82f6;">GRAND TOTAL</td><td style="font-weight:bold;color:#3b82f6;">${fmtRp(grand)}</td></tr>
      </tfoot>
    </table>
  `;
  zoyDownloadPDF(tableHtml, 'zoy-rab-' + new Date().toISOString().slice(0,10));
}

function zoyDownloadProjectExcel(projectId) {
  const project = state.projects.find(p => p.id === projectId);
  if (!project || project.files.length === 0) {
    alert('This project has no files!');
    return;
  }
  const data = project.files.map((f, i) => ({
    'No': i + 1,
    'File Name': f.name,
    'Size': f.size,
    'Type': f.type || 'unknown',
    'Date': project.date
  }));
  zoyDownloadExcel(data, project.name.replace(/\s+/g, '_'));
}

function zoyDownloadProjectPdf(projectId) {
  const project = state.projects.find(p => p.id === projectId);
  if (!project || project.files.length === 0) {
    alert('This project has no files!');
    return;
  }
  let tableHtml = `
    <h2>▣ ${project.name}</h2>
    <p><strong>Date:</strong> ${project.date}</p>
    <p><strong>Total Files:</strong> ${project.files.length}</p>
    <table>
      <thead><tr><th>No</th><th>File Name</th><th>Size</th></tr></thead>
      <tbody>
  `;
  project.files.forEach((f, i) => {
    tableHtml += `<tr><td>${i+1}</td><td>${f.name}</td><td>${f.size}</td></tr>`;
  });
  tableHtml += `</tbody></table>`;
  zoyDownloadPDF(tableHtml, project.name.replace(/\s+/g, '_'));
}

// ============================================================
// 19. TRANSLATE
// ============================================================
let translateState = {
  isRab: false,
  currentText: '',
  targetLang: 'en'
};

document.getElementById('zoyTranslateRabBtn')?.addEventListener('click', function() {
  const rabData = state.rabRows;
  if (rabData.length === 0) {
    alert('No RAB data to translate!');
    return;
  }
  
  let text = '▣ RENCANA ANGGARAN BIAYA (RAB)\n\n';
  text += '◆ MATERIAL DETAILS:\n';
  rabData.forEach((item, i) => {
    text += `${i+1}. ${item.desc || 'Item'}\n`;
    text += `   Material: ${item.material || '-'}\n`;
    text += `   Volume: ${item.volume || 0} ${item.unit || 'pcs'}\n`;
    text += `   Qty: ${item.qty || 1}\n`;
    text += `   Material Price: Rp ${(item.matPrice || 0).toLocaleString('id-ID')}\n`;
    text += `   Labor Cost: Rp ${(item.labor || 0).toLocaleString('id-ID')}\n`;
    text += `   Total: Rp ${(item.total || 0).toLocaleString('id-ID')}\n\n`;
  });
  
  const subtotal = state.rabRows.reduce((s, r) => s + (r.total || 0), 0);
  const ohPct = Number(document.getElementById('zoyRabOverhead')?.value) || 10;
  const taxPct = Number(document.getElementById('zoyRabTax')?.value) || 11;
  const oh = subtotal * ohPct / 100;
  const tax = (subtotal + oh) * taxPct / 100;
  const grand = subtotal + oh + tax;
  
  text += `\n◈ COST SUMMARY:\n`;
  text += `Subtotal: Rp ${subtotal.toLocaleString('id-ID')}\n`;
  text += `Overhead (${ohPct}%): Rp ${oh.toLocaleString('id-ID')}\n`;
  text += `PPN (${taxPct}%): Rp ${tax.toLocaleString('id-ID')}\n`;
  text += `GRAND TOTAL: Rp ${grand.toLocaleString('id-ID')}\n`;
  
  document.getElementById('zoyTranslateText').value = text;
  document.getElementById('zoyTranslateResult').style.display = 'none';
  document.getElementById('zoyTranslateCopy').style.display = 'none';
  translateState.isRab = true;
  translateState.currentText = text;
  
  document.getElementById('zoyTranslateModal').classList.add('show');
});

document.getElementById('zoyTranslateCostBtn')?.addEventListener('click', function() {
  const costResult = document.getElementById('zoyCostResult')?.textContent || '';
  const costNote = document.getElementById('zoyCostNote')?.textContent || '';
  
  if (!costResult || costResult === 'Rp 0') {
    alert('No estimation result to translate!');
    return;
  }
  
  let text = '§ COST ESTIMATION\n\n';
  text += `Estimated Cost: ${costResult}\n`;
  text += `Details: ${costNote}\n\n`;
  
  const type = document.getElementById('zoyCostType')?.selectedOptions[0]?.text || '';
  const area = document.getElementById('zoyCostArea')?.value || '0';
  const floors = document.getElementById('zoyCostFloors')?.value || '1';
  const finish = document.getElementById('zoyCostFinish')?.selectedOptions[0]?.text || '';
  
  text += `◈ Project Details:\n`;
  text += `Type: ${type}\n`;
  text += `Area: ${area} m²\n`;
  text += `Floors: ${floors}\n`;
  text += `Finish Level: ${finish}\n`;
  
  const detailContainer = document.getElementById('zoyCostDetailContainer');
  if (detailContainer && detailContainer.style.display !== 'none') {
    const table = document.getElementById('zoyCostDetailTable');
    if (table) {
      text += `\n◆ MATERIAL BREAKDOWN:\n`;
      const rows = table.querySelectorAll('tbody tr');
      rows.forEach(row => {
        const cells = row.querySelectorAll('td');
        if (cells.length >= 6) {
          text += `- ${cells[1].textContent.trim()}: ${cells[3].textContent.trim()} ${cells[2].textContent.trim()} = ${cells[5].textContent.trim()}\n`;
        }
      });
    }
  }
  
  document.getElementById('zoyTranslateText').value = text;
  document.getElementById('zoyTranslateResult').style.display = 'none';
  document.getElementById('zoyTranslateCopy').style.display = 'none';
  translateState.isRab = false;
  translateState.currentText = text;
  
  document.getElementById('zoyTranslateModal').classList.add('show');
});

  document.getElementById('zoyTranslateExecute')?.addEventListener('click', function() {
  const btn = this;
  const originalText = btn.textContent;
  btn.textContent = '⏳ Translating...';
  btn.disabled = true;
  
  const plan = tokenState.plan || 'free';
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  
  // Ambil teks dari input modal ATAU dari konten teks halaman
  const modalText = document.getElementById('zoyTranslateText')?.value.trim();
  const fullPageContent = document.body.innerText;
  const textToTranslate = modalText || fullPageContent;

  // Bahasa target (satu kali deklarasi)
  // KODE PERBAIKAN:
const targetLang = document.getElementById('zoyTranslateTargetLang')?.value || document.getElementById('zoyPrefLanguage')?.value || 'en';

  fetch('/api/translate', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken,
      'X-Plan': plan
    },
    body: JSON.stringify({
      text: textToTranslate,
      target_language: targetLang,
      source_language: 'id',
      scope: 'full_website',
      plan: plan
    })
  })
  .then(async response => {
    const contentType = response.headers.get('content-type');
    const isJson = contentType && contentType.includes('application/json');
    const data = isJson ? await response.json() : await response.text();

    if (!response.ok) {
      const errorMsg = typeof data === 'object' ? (data.message || data.error) : data;
      throw new Error(`HTTP ${response.status}: ${errorMsg || 'Server Error'}`);
    }
    return data;
  })
  .then(data => {
    btn.textContent = originalText;
    btn.disabled = false;
    
    if (data.status === 'success') {
      localStorage.setItem('zoy_lang', targetLang);
      
      const resultBox = document.getElementById('zoyTranslateResult');
      const outputEl = document.getElementById('zoyTranslateOutput');
      const copyBtn = document.getElementById('zoyTranslateCopy');
      
      if (data.translated_text && outputEl) {
        outputEl.textContent = data.translated_text;
        if (resultBox) resultBox.style.display = 'block';
        if (copyBtn) copyBtn.style.display = 'inline-block';
      }

      showNotification('✓ Translation successful!', 'success');
      
      if (data.reload) {
        window.location.reload();
      }
    } else {
      alert('⚠️ ' + (data.message || 'Translation failed'));
    }
  })
  .catch(error => {
    console.error('Error:', error);
    btn.textContent = originalText;
    btn.disabled = false;
    alert('⚠️ ' + error.message);
  });
});

document.getElementById('zoyTranslateCopy')?.addEventListener('click', function() {
  const output = document.getElementById('zoyTranslateOutput').textContent;
  if (!output) return;
  
  navigator.clipboard.writeText(output).then(() => {
    showNotification('✓ Text copied to clipboard!', 'success');
  }).catch(() => {
    const textarea = document.createElement('textarea');
    textarea.value = output;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    document.body.removeChild(textarea);
    showNotification('✓ Text copied!', 'success');
  });
});

document.getElementById('zoyTranslateClose')?.addEventListener('click', function() {
  document.getElementById('zoyTranslateModal').classList.remove('show');
});

document.getElementById('zoyTranslateModal')?.addEventListener('click', function(e) {
  if (e.target === this) {
    this.classList.remove('show');
  }
});

// ============================================================
// 20. SETTINGS - PERBAIKAN THEME & FONT SIZE
// ============================================================
function zoyHandleLogout() {
  if (confirm('Apakah kamu yakin ingin keluar dari akun ini?')) {
    // Jika User Login via Laravel / Google OAuth
    if (window.currentUser) {
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
      
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = '/logout'; // Endpoint POST logout Laravel
      
      if (csrfToken) {
        const tokenInput = document.createElement('input');
        tokenInput.type = 'hidden';
        tokenInput.name = '_token';
        tokenInput.value = csrfToken;
        form.appendChild(tokenInput);
      }
      
      document.body.appendChild(form);
      form.submit();
    } else {
      // Jika mode Guest, reset data lokal dan reload
      localStorage.removeItem('zoy_profile');
      localStorage.removeItem('zoy_state');
      window.location.reload();
    }
  }
}

// Ekspos ke window agar tombol onclick="zoyHandleLogout()" bisa jalan
window.zoyHandleLogout = zoyHandleLogout;

function zoyLoadProfile() {
  try {
    const avatarEl = document.getElementById('zoyProfileAvatar');
    const statusEl = document.getElementById('zoyProfileAuthStatus');
    const typeEl = document.getElementById('zoyProfileAuthType');
    const resetBtn = document.getElementById('zoyResetGoogleProfileBtn');
    const userIdInp = document.getElementById('zoyProfileUserId');

    // 👉 1. CEK CADANGAN DARI LOCALSTORAGE JIKA WINDOW.CURRENTUSER KOSONG
    if (!window.currentUser) {
      const localUser = localStorage.getItem('zoy_logged_in_user');
      if (localUser) {
        try {
          window.currentUser = JSON.parse(localUser);
        } catch(e) {}
      }
    }

    // 2. Jika User Terdeteksi Login (baik dari Laravel maupun localStorage)
    if (window.currentUser) {
      state.guest = false;
      state.userId = window.currentUser.id || 1;
      if (userIdInp) userIdInp.value = window.currentUser.id || 1;

      // Ambil kustomisasi profil jika ada
      const customProfile = JSON.parse(localStorage.getItem('zoy_custom_profile_' + window.currentUser.id) || '{}');
      
      if (document.getElementById('zoyProfileUsername')) 
        document.getElementById('zoyProfileUsername').value = customProfile.username || window.currentUser.name || '';
      if (document.getElementById('zoyProfileDisplayName')) 
        document.getElementById('zoyProfileDisplayName').value = customProfile.displayName || window.currentUser.name || '';
      if (document.getElementById('zoyProfileEmail')) 
        document.getElementById('zoyProfileEmail').value = customProfile.email || window.currentUser.email || '';

      if (statusEl) statusEl.textContent = window.currentUser.name || 'Member Account';
      if (typeEl) typeEl.textContent = 'Status: Member (20 Tokens)';
      
      if (window.currentUser.avatar && avatarEl) {
        avatarEl.innerHTML = `<img src="${window.currentUser.avatar}" style="width:100%;height:100%;object-fit:cover;">`;
      } else if (avatarEl) {
        avatarEl.textContent = (window.currentUser.name || 'M').charAt(0).toUpperCase();
      }
      if (resetBtn) resetBtn.style.display = 'inline-block';
      return;
    }

    // 3. Mode Guest (Jika benar-benar belum login sama sekali)
    if (!state.userId || state.userId === '1' || state.userId.startsWith('1')) {
      const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      let randomString = '';
      for (let i = 0; i < 10; i++) {
        randomString += chars.charAt(Math.floor(Math.random() * chars.length));
      }
      state.userId = 'zoy_' + randomString; 
      tokenState.tokens = 5;
      tokenState.plan = 'free';
    }

    if (userIdInp) userIdInp.value = state.userId;

    const data = JSON.parse(localStorage.getItem('zoy_profile') || '{}');
    if (document.getElementById('zoyProfileUsername')) document.getElementById('zoyProfileUsername').value = data?.username || 'guest_user';
    if (document.getElementById('zoyProfileDisplayName')) document.getElementById('zoyProfileDisplayName').value = data?.displayName || 'Guest User';
    if (document.getElementById('zoyProfileEmail')) document.getElementById('zoyProfileEmail').value = data?.email || 'guest@zoyai.com';
    
    if (statusEl) statusEl.textContent = 'Guest Account';
    if (typeEl) typeEl.textContent = 'Belum login — Menggunakan profil lokal (5 Tokens)';
    if (avatarEl) avatarEl.textContent = 'G';
    if (resetBtn) resetBtn.style.display = 'none';

  } catch(e) {
    console.error('Error loading profile:', e);
  }
}
// ============================================================
// ADMIN PANEL & ADD USER FUNCTIONS
// ============================================================
function checkAdminAccess() {
  if (window.currentUser && window.currentUser.email) {
    if (window.currentUser.email.toLowerCase() === 'zoyaideveloper@gmail.com') {
      const adminWrapper = document.getElementById('zoyAdminMenuWrapper');
      if (adminWrapper) adminWrapper.style.display = 'block';
    }
  }
}

// Panggil saat profil dimuat
document.addEventListener('DOMContentLoaded', checkAdminAccess);

function adminVerifyUser() {
  const query = document.getElementById('adminSearchInput').value.trim();
  if (!query) { alert('Masukkan ID atau Email user terlebih dahulu!'); return; }

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  fetch('/api/admin/verify-user', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({ search: query })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      document.getElementById('resUserName').textContent = data.user.name;
      document.getElementById('resUserEmail').textContent = data.user.email;
      document.getElementById('resUserPlan').textContent = data.user.current_plan.toUpperCase();
      document.getElementById('resTargetUserId').value = data.user.id;
      document.getElementById('adminNewPlanSelect').value = data.user.current_plan;
      
      document.getElementById('adminVerifyResult').style.display = 'block';
    } else {
      alert('⚠️ ' + data.message);
      document.getElementById('adminVerifyResult').style.display = 'none';
    }
  })
  .catch(err => console.error(err));
}

function adminExecuteUpgrade() {
  const userId = document.getElementById('resTargetUserId').value;
  const newPlan = document.getElementById('adminNewPlanSelect').value;

  if (!userId) return;
  if (!confirm(`Yakin ingin mengubah status user ini menjadi ${newPlan.toUpperCase()}?`)) return;

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  fetch('/api/admin/upgrade-user', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({ user_id: userId, plan: newPlan })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      showNotification('✓ ' + data.message, 'success');
      document.getElementById('zoyAdminModal').classList.remove('show');
    } else {
      alert('⚠️ ' + data.message);
    }
  })
  .catch(err => console.error(err));
}

function adminAddNewUser() {
  const name = document.getElementById('newUserName').value.trim();
  const email = document.getElementById('newUserEmail').value.trim();
  const password = document.getElementById('newUserPass').value.trim();
  const plan = document.getElementById('newUserPlan').value;

  if (!name || !email || !password) {
    alert('Semua kolom harus diisi!');
    return;
  }

  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  fetch('/api/admin/add-user', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({ name, email, password, plan })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      showNotification('✓ ' + data.message, 'success');
      document.getElementById('newUserName').value = '';
      document.getElementById('newUserEmail').value = '';
      document.getElementById('newUserPass').value = '';
      document.getElementById('zoyAdminModal').classList.remove('show');
    } else {
      alert('⚠️ ' + (data.message || 'Gagal menambah user'));
    }
  })
  .catch(err => console.error(err));
}

// Ekspos fungsi ke window agar dapat dipanggil lewat onclick HTML
window.adminVerifyUser = adminVerifyUser;
window.adminExecuteUpgrade = adminExecuteUpgrade;
window.adminAddNewUser = adminAddNewUser;

  function zoyCopyUserId() {
  const userIdInp = document.getElementById('zoyProfileUserId');
  if (!userIdInp || !userIdInp.value) return;

  navigator.clipboard.writeText(userIdInp.value).then(() => {
    if (typeof showNotification === 'function') {
      showNotification('✓ User ID berhasil disalin!', 'success');
    } else {
      alert('User ID berhasil disalin: ' + userIdInp.value);
    }
  });
}
window.zoyCopyUserId = zoyCopyUserId;

function zoySaveProfile() {
  const username = document.getElementById('zoyProfileUsername').value.trim();
  const displayName = document.getElementById('zoyProfileDisplayName').value.trim();
  const email = document.getElementById('zoyProfileEmail').value.trim();

  if (!username || !email) { 
    alert('Username dan Email tidak boleh kosong!'); 
    return; 
  }

  const profileData = { username, displayName, email };

  if (window.currentUser) {
    // Simpan kustomisasi profil khusus untuk ID user yang sedang login
    localStorage.setItem('zoy_custom_profile_' + window.currentUser.id, JSON.stringify(profileData));
  } else {
    // Simpan untuk Guest
    localStorage.setItem('zoy_profile', JSON.stringify(profileData));
  }

  const saved = document.getElementById('zoyProfileSaved');
  if (saved) {
    saved.classList.add('show'); 
    setTimeout(() => saved.classList.remove('show'), 2000);
  }
  
  showNotification('✓ Profil berhasil diperbarui!', 'success');
  zoyLoadProfile(); // Refresh tampilan
}

// Fungsi opsional untuk mengembalikan data sesuai akun Google asli
function zoyResetToGoogleProfile() {
  if (window.currentUser && confirm('Kembalikan profil sesuai data akun Google asli?')) {
    localStorage.removeItem('zoy_custom_profile_' + window.currentUser.id);
    zoyLoadProfile();
    showNotification('✓ Profil dikembalikan ke data Google!', 'info');
  }
}

// Daftarkan fungsi ke window agar dapat dipanggil oleh button onclick
window.zoyResetToGoogleProfile = zoyResetToGoogleProfile;

function zoyChangePassword() {
  const oldPass = document.getElementById('zoySecurityOldPass').value;
  const newPass = document.getElementById('zoySecurityNewPass').value;
  const confirmPass = document.getElementById('zoySecurityConfirmPass').value;
  const errorEl = document.getElementById('zoySecurityError');
  errorEl.style.display = 'none';
  errorEl.textContent = '';
  if (!oldPass) { errorEl.textContent = '❌ Enter old password!'; errorEl.style.display = 'block'; return; }
  if (newPass.length < 8) { errorEl.textContent = '❌ New password must be at least 8 characters!'; errorEl.style.display = 'block'; return; }
  if (newPass !== confirmPass) { errorEl.textContent = '❌ Passwords do not match!'; errorEl.style.display = 'block'; return; }
  const savedPass = localStorage.getItem('zoy_password') || 'password123';
  if (oldPass !== savedPass) { errorEl.textContent = '❌ Old password is incorrect!'; errorEl.style.display = 'block'; return; }
  localStorage.setItem('zoy_password', newPass);
  document.getElementById('zoySecurityOldPass').value = '';
  document.getElementById('zoySecurityNewPass').value = '';
  document.getElementById('zoySecurityConfirmPass').value = '';
  const saved = document.getElementById('zoySecuritySaved');
  saved.classList.add('show'); setTimeout(() => saved.classList.remove('show'), 2000);
}

function zoySavePreferences() {
  const language = document.getElementById('zoyPrefLanguage')?.value || 'id';
  const theme = document.getElementById('zoyPrefTheme')?.value || 'dark';
  const fontSize = document.getElementById('zoyPrefFontSize')?.value || 'medium';
  
  const prefs = { language, theme, fontSize };
  
  // 1. Simpan ke LocalStorage agar tidak hilang saat refresh di browser
  localStorage.setItem('zoy_preferences', JSON.stringify(prefs));
  
  // 2. Langsung terapkan tampilan di halaman
  zoyApplyTheme(theme);
  zoyApplyFontSize(fontSize);
  
  // 3. Tampilkan notifikasi dan teks '✓ Saved!'
  const saved = document.getElementById('zoyPrefSaved');
  if (saved) {
    saved.classList.add('show'); 
    setTimeout(() => saved.classList.remove('show'), 2000);
  }
  showNotification('✓ Preferences saved!', 'success');

  // 4. Kirim ke Server/Database Laravel (opsional jika ada API backend)
  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  if (csrfToken) {
    fetch('/api/user/preferences', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
      },
      body: JSON.stringify(prefs)
    }).catch(e => console.log('Saved locally'));
  }
}

function zoyLoadPreferences() {
  try {
    const rawData = localStorage.getItem('zoy_preferences');
    if (!rawData) return;

    const data = JSON.parse(rawData);
    
    // Set value dropdown sesuai data simpanan
    if (data.theme && document.getElementById('zoyPrefTheme')) {
      document.getElementById('zoyPrefTheme').value = data.theme;
    }
    if (data.fontSize && document.getElementById('zoyPrefFontSize')) {
      document.getElementById('zoyPrefFontSize').value = data.fontSize;
    }
    if (data.language && document.getElementById('zoyPrefLanguage')) {
      document.getElementById('zoyPrefLanguage').value = data.language;
    }
    
    // Eksekusi penerapan tema & font
    if (data.theme) zoyApplyTheme(data.theme);
    if (data.fontSize) zoyApplyFontSize(data.fontSize);

  } catch(e) {
    console.error('Error loading preferences:', e);
  }
}

function zoyApplyTheme(theme) {
  const body = document.body;
  
  if (theme === 'light') {
    body.classList.add('zoy-light-theme');
  } else if (theme === 'system') {
    const isSystemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if (isSystemDark) {
      body.classList.remove('zoy-light-theme');
    } else {
      body.classList.add('zoy-light-theme');
    }
  } else {
    // dark (default)
    body.classList.remove('zoy-light-theme');
  }
}

// Event listener saat dropdown diubah secara manual
function zoyApplyFontSize(size) {
  const sizes = { small: '12px', medium: '14px', large: '17px' };
  const fontSize = sizes[size] || '14px';
  document.documentElement.style.fontSize = fontSize;
}

// Event listener tema & font size yang sudah rapi
document.getElementById('zoyPrefTheme')?.addEventListener('change', function() {
  zoyApplyTheme(this.value);
});

document.getElementById('zoyPrefFontSize')?.addEventListener('change', function() {
  zoyApplyFontSize(this.value);
});

function zoySaveAIPreferences() {
  const detail = document.getElementById('zoyAIResponseDetail').value;
  const unit = document.getElementById('zoyAIDefaultUnit').value;
  const provider = document.getElementById('zoyAIProvider')?.value || 'neoxr';
  const aiPrefs = { detail, unit, provider };
  localStorage.setItem('zoy_ai_preferences', JSON.stringify(aiPrefs));
  const saved = document.getElementById('zoyAISaved');
  saved.classList.add('show'); setTimeout(() => saved.classList.remove('show'), 2000);
  showNotification('✓ s saved!', 'success');
}

function zoyUpdateAiProviderOptions() {
  const currentPlan = tokenState.plan || 'free';
  const optPro = document.getElementById('optZoyPro');
  const optMax = document.getElementById('optZoyMax');
  const selectEngine = document.getElementById('zoyAIProvider');

  if (!selectEngine) return;

  if (currentPlan === 'premium') {
    if (optPro) optPro.disabled = false;
    if (optMax) optMax.disabled = false;
  } else if (currentPlan === 'pro') {
    if (optPro) optPro.disabled = false;
    if (optMax) optMax.disabled = true;
  } else {
    if (optPro) optPro.disabled = true;
    if (optMax) optMax.disabled = true;
  }

  if (selectEngine.options[selectEngine.selectedIndex]?.disabled) {
    selectEngine.value = 'zoy_basic';
  }
}

function zoyLoadAIPreferences() {
  try {
    zoyUpdateAiProviderOptions();
    
    const data = JSON.parse(localStorage.getItem('zoy_ai_preferences'));
    if (data) {
      if (document.getElementById('zoyAIResponseDetail')) document.getElementById('zoyAIResponseDetail').value = data.detail || 'balanced';
      if (document.getElementById('zoyAIDefaultUnit')) document.getElementById('zoyAIDefaultUnit').value = data.unit || 'metric';
      
      const selectEngine = document.getElementById('zoyAIProvider');
      if (selectEngine && data.provider) {
        selectEngine.value = data.provider;
        if (selectEngine.options[selectEngine.selectedIndex]?.disabled) {
          selectEngine.value = 'zoy_basic';
        }
      }
    }
  } catch(e) {}
}

function zoyUpgradePlan(plan) {
  // 1. Cek jika pengguna memilih paket Free
  if (plan === 'free') {
    alert('You are currently using the Free plan.');
    return;
  }

  // 2. Cek apakah pengguna sudah login
  if (!window.currentUser) {
    alert('Please log in first to upgrade your plan!');
    if (typeof zoyOpenAuth === 'function') zoyOpenAuth();
    return;
  }

  // 3. Cek jika paket yang dipilih sama dengan paket yang sedang aktif
  if (typeof tokenState !== 'undefined' && tokenState.plan === plan) {
    alert(`You are currently on the ${plan.toUpperCase()} plan!`);
    return;
  }

  // 4. Nomor WhatsApp Admin & Detil Akun
  const noWaAdmin = "6285869157394"; 
  const userId = window.currentUser.id;
  const userName = window.currentUser.name || window.currentUser.email;

  // Nama paket otomatis (Pro atau Premium Max)
  const planName = plan === 'premium' ? 'Premium Max' : (plan === 'pro' ? 'Pro' : plan.toUpperCase());

  // Format pesan otomatis dalam Bahasa Inggris
  const message = `Hello Admin Zoy AI, I would like to upgrade my account to the ${planName} Plan.

Account Details:
- User ID: ${userId}
- Name/Email: ${userName}
- Selected Plan: ${planName}

Please send me the payment link or QRIS. Thank you!`;

  // Redirect langsung ke WhatsApp
  const waUrl = `https://wa.me/${noWaAdmin}?text=${encodeURIComponent(message)}`;
  window.open(waUrl, '_blank');
}

document.querySelectorAll('.zoy-s-tab').forEach(tab => {
  tab.addEventListener('click', function() {
    document.querySelectorAll('.zoy-s-tab').forEach(t => t.classList.remove('active'));
    this.classList.add('active');
    const target = this.dataset.tab;
    document.querySelectorAll('.zoy-s-panel').forEach(p => {
      p.style.display = p.dataset.panel === target ? 'flex' : 'none';
    });
  });
});

// ============================================================
// 21. AUTH SYSTEM
// ============================================================
const authModal = document.getElementById('zoyAuthModal');

function zoyOpenAuth() { authModal.classList.add('show'); }
function zoyCloseAuth() { authModal.classList.remove('show'); }

window.zoyOAuthLogin = function(provider) {
    // Redirect browser langsung ke endpoint backend Laravel
    window.location.href = `/auth/redirect/${provider}`;
};

document.getElementById('zoyGuestBtn').addEventListener('click', () => { guestGate.classList.remove('show'); zoyOpenAuth(); });
document.getElementById('zoyAuthClose').addEventListener('click', zoyCloseAuth);
authModal.addEventListener('click', (e) => { if (e.target === authModal) zoyCloseAuth(); });

document.getElementById('zoyAuthSwitchToRegister').addEventListener('click', function() {
  document.getElementById('zoyAuthLogin').style.display = 'none';
  document.getElementById('zoyAuthRegister').style.display = 'block';
});

document.getElementById('zoyAuthSwitchToLogin').addEventListener('click', function() {
  document.getElementById('zoyAuthRegister').style.display = 'none';
  document.getElementById('zoyAuthLogin').style.display = 'block';
});

document.getElementById('zoyAuthLoginBtn').addEventListener('click', function() {
  const email = document.getElementById('zoyAuthEmail').value.trim();
  const password = document.getElementById('zoyAuthPassword').value.trim();
  if (!email || !password) { alert('Please fill in all fields!'); return; }
  
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  
  fetch('/auth/login', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({ email, password })
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      state.guest = false;
      state.userId = data.user_id || email;
      
      // ➔ SIMPAN KE LOCALSTORAGE AGAR LANGSUNG TERBACA SETELAH RELOAD
      const userData = data.user || {
        id: data.user_id || 1,
        name: email.split('@')[0],
        email: email
      };
      localStorage.setItem('zoy_logged_in_user', JSON.stringify(userData));

      zoyCloseAuth();
      showNotification('✓ Login successful!', 'success');
      
      setTimeout(() => {
        window.location.reload();
      }, 1000);

    } else {
      alert('❌ ' + (data.message || 'Login failed'));
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert('⚠️ Failed to connect to server');
  });
});

document.getElementById('zoyAuthRegisterBtn').addEventListener('click', function() {
  const name = document.getElementById('zoyRegName').value.trim();
  const email = document.getElementById('zoyRegEmail').value.trim();
  const password = document.getElementById('zoyRegPassword').value.trim();
  const role = document.getElementById('zoyRegRole').value;
  
  if (!name || !email || !password) { alert('Please fill in all fields!'); return; }
  if (password.length < 8) { alert('Password must be at least 8 characters!'); return; }
  
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  
  fetch('/auth/register', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({ name, email, password, role })
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'success') {
      state.guest = false;
      state.userId = data.user_id || email;
      zoyCloseAuth();
      showNotification('✓ Registration successful! Welcome!', 'success');
      
      // 🔄 Reload halaman agar sesi Laravel aktif & profil muncul
      setTimeout(() => {
        window.location.reload();
      }, 1000);

    } else {
      alert('❌ ' + (data.message || 'Registration failed'));
    }
  })
  .catch(error => {
    console.error('Error:', error);
    alert('⚠️ Failed to connect to server');
  });
});

// ============================================================
// 22. FILE ATTACHMENT
// ============================================================
function zoyRenderAttachments() {
  const composerInner = document.getElementById('zoyComposerInner');
  let previewContainer = document.getElementById('zoyAttachmentsPreview');
  if (previewContainer) previewContainer.remove();
  
  if (zoyAttachedFiles.length === 0) return;
  
  previewContainer = document.createElement('div');
  previewContainer.id = 'zoyAttachmentsPreview';
  previewContainer.className = 'zoy-attachment-list';
  previewContainer.style.width = '100%';
  
  const fileIcons = { pdf: '■', doc: '◆', docx: '◆', xls: '▣', xlsx: '▣', txt: '◆', csv: '▣', jpg: '◉', jpeg: '◉', png: '◉', zip: '◈', rar: '◈', '7z': '◈' };
  
  zoyAttachedFiles.forEach((file, index) => {
    const icon = fileIcons[file.ext] || '◈';
    const size = file.size > 1024 * 1024 ? (file.size / (1024 * 1024)).toFixed(1) + ' MB' : (file.size / 1024).toFixed(0) + ' KB';
    const el = document.createElement('span');
    el.className = 'zoy-attachment';
    el.innerHTML = `${icon} ${file.name} (${size}) <span class="remove" data-index="${index}">✕</span>`;
    previewContainer.appendChild(el);
  });
  
  previewContainer.querySelectorAll('.remove').forEach(btn => {
    btn.addEventListener('click', function() {
      const index = parseInt(this.dataset.index);
      zoyAttachedFiles.splice(index, 1);
      zoyRenderAttachments();
    });
  });
  
  composerInner.insertBefore(previewContainer, composerInner.querySelector('textarea'));
}

// 1. FILE ATTACHMENT (Membuka file picker umum)
document.getElementById('zoyAttachBtn')?.addEventListener('click', function() {
  const fileInput = document.getElementById('zoyFileInput');
  fileInput.removeAttribute('accept'); // Izinkan semua format yang didukung
  fileInput.click();
});

document.getElementById('zoyFileInput')?.addEventListener('change', function(e) {
  const files = e.target.files;
  if (!files || files.length === 0) return;
  
  if (zoyAttachedFiles.length + files.length > 5) {
    alert('Maksimal 5 file per pesan!');
    this.value = '';
    return;
  }
  
  const maxSize = 5 * 1024 * 1024; // 5MB
  let hasError = false;
  
  Array.from(files).forEach(file => {
    if (file.size > maxSize) {
      alert(`File "${file.name}" terlalu besar! Maksimal 5MB.`);
      hasError = true;
      return;
    }
    const allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'txt', 'csv', 'jpg', 'jpeg', 'png', 'webp', 'zip', 'rar', '7z'];
    const ext = file.name.split('.').pop().toLowerCase();
    if (!allowedExtensions.includes(ext)) {
      alert(`Format file "${file.name}" tidak didukung!`);
      hasError = true;
      return;
    }
    zoyAttachedFiles.push({
      name: file.name,
      size: file.size,
      type: file.type,
      ext: ext,
      file: file
    });
  });
  
  if (hasError) { this.value = ''; return; }
  zoyRenderAttachments();
  this.value = '';
});

// 2. IMAGE BUTTON (Langsung membuka galeri/khusus foto)
document.getElementById('zoyImageBtn')?.addEventListener('click', function() {
  const fileInput = document.getElementById('zoyFileInput');
  fileInput.setAttribute('accept', 'image/*');
  fileInput.click();
});

// 3. CAMERA BUTTON (Membuka kamera HP/Webcam dengan izin browser)
document.getElementById('zoyCameraBtn')?.addEventListener('click', async function() {
  const cameraInput = document.getElementById('zoyCameraInput');
  
  if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    try {
      // Meminta izin kamera
      const stream = await navigator.mediaDevices.getUserMedia({ video: true });
      stream.getTracks().forEach(track => track.stop()); // Matikan stream tes
      cameraInput.click();
    } catch (err) {
      alert('⚠️ Akses kamera ditolak. Silakan izinkan akses kamera di pengaturan browser kamu.');
    }
  } else {
    cameraInput.click();
  }
});

// Menangani hasil jepretan kamera langsung
document.getElementById('zoyCameraInput')?.addEventListener('change', function(e) {
  if (this.files && this.files.length > 0) {
    const file = this.files[0];
    const ext = file.name.split('.').pop().toLowerCase() || 'jpg';
    
    if (zoyAttachedFiles.length >= 5) {
      alert('Maksimal 5 file per pesan!');
      this.value = '';
      return;
    }

    zoyAttachedFiles.push({
      name: `Photo_${Date.now()}.${ext}`,
      size: file.size,
      type: file.type || 'image/jpeg',
      ext: ext,
      file: file
    });
    
    zoyRenderAttachments();
    this.value = '';
  }
});

// 4. WEB SEARCH BUTTON (Toggle On/Off seperti ChatGPT/Gemini)
let isWebSearchActive = false;

document.getElementById('zoyWebBtn')?.addEventListener('click', function() {
  isWebSearchActive = !isWebSearchActive;
  
  if (isWebSearchActive) {
    this.style.background = 'rgba(59, 130, 246, 0.25)';
    this.style.borderColor = 'var(--zoy-blue)';
    this.style.color = '#fff';
    if (typeof showNotification === 'function') {
      showNotification('🌐 Web Search diaktifkan', 'info');
    }
  } else {
    this.style.background = 'rgba(255, 255, 255, 0.03)';
    this.style.borderColor = 'transparent';
    this.style.color = 'var(--zoy-muted)';
    if (typeof showNotification === 'function') {
      showNotification('🌐 Web Search dimatikan', 'info');
    }
  }
});


// ============================================================
// 23. BROWSER HISTORY
// ============================================================
let zoyPageState = { currentView: 'landing', currentTab: 'chat', chatId: null };

function zoySaveState() {
  try {
    const saveData = {
      currentView: zoyPageState.currentView,
      currentTab: zoyPageState.currentTab,
      chatId: zoyPageState.chatId,
      messages: state.currentMessages ? state.currentMessages.slice(0, 10) : [],
      plan: tokenState.plan,
      tokens: tokenState.tokens,
      chatHistory: state.chatHistory ? state.chatHistory.slice(0, 10) : []
    };
    localStorage.setItem('zoy_state', JSON.stringify(saveData));
  } catch(e) {}
}

function zoyRestoreState() {
  try {
    const saved = JSON.parse(localStorage.getItem('zoy_state'));
    if (saved) {
      if (saved.plan) tokenState.plan = saved.plan;
      if (saved.tokens) tokenState.tokens = saved.tokens;
      if (saved.currentView === 'app' && saved.currentTab) {
        setTimeout(() => {
          openApp();
          setTimeout(() => {
            const item = document.querySelector(`.zoy-sb-item[data-view="${saved.currentTab}"]`);
            if (item) item.click();
            if (saved.chatId) loadChat(saved.chatId);
            renderToken(); renderHistory(); renderProjects();
          }, 300);
        }, 300);
      }
    }
  } catch(e) {}
}

window.addEventListener('popstate', function(event) {
  const state = event.state;
  if (!state || state.view === 'landing') {
    if (appShell.classList.contains('active')) closeApp();
  } else if (state.view === 'app') {
    if (!appShell.classList.contains('active')) openApp();
    if (state.tab) {
      const tabBtn = document.querySelector(`.zoy-sb-item[data-view="${state.tab}"]`);
      if (tabBtn) tabBtn.click();
    }
    if (state.chatId) loadChat(state.chatId);
  }
});

setInterval(zoySaveState, 5000);

// ============================================================
// 24. INIT & EXPORT
// ============================================================
// Fungsi untuk memicu pembuatan file dari Chat AI
function zoyRequestFileGeneration(type, title, contentData, textContent = '') {
  const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  
  // Disesuaikan ke /generate-file agar cocok dengan route Laravel di web.php
  fetch('/generate-file', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken
    },
    body: JSON.stringify({
      type: type, // 'excel' atau 'word'
      title: title,
      content: contentData,
      text_content: textContent
    })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === 'success') {
      const fileBadge = `
        <div style="margin-top:10px; padding:10px; background:rgba(59,130,246,0.1); border:1px solid var(--zoy-blue); border-radius:8px;">
          <p style="font-weight:600; font-size:12px; margin-bottom:4px;">📂 Berkas Siap Diunduh:</p>
          <a href="${data.file_url}" target="_blank" download class="zoy-btn-sm primary" style="display:inline-block; text-decoration:none; margin-top:4px;">
            ⬇️ Download ${data.file_name}
          </a>
        </div>
      `;
      
      addMsg('ai', `Berikut adalah file **${type.toUpperCase()}** yang kamu minta:${fileBadge}`);
    } else {
      alert('⚠️ Gagal membuat file: ' + (data.message || 'Terjadi kesalahan server'));
    }
  })
  .catch(err => {
    console.error('Error generating file:', err);
    alert('⚠️ Gagal terhubung ke server untuk pembuatan file.');
  });
}
// ============================================================
// 25. LAST
// ============================================================
// Wajib diekspos ke window agar tombol onclick="" di HTML bisa memanggil fungsinya
window.zoySaveProfile = zoySaveProfile;
window.zoyChangePassword = zoyChangePassword;
window.zoySavePreferences = zoySavePreferences;
window.zoySaveAIPreferences = zoySaveAIPreferences;
window.zoyUpgradePlan = zoyUpgradePlan;
window.zoyRequestFileGeneration = zoyRequestFileGeneration;
  
renderToken();
renderHistory();
renderProjects();
zoyLoadProfile();
zoyLoadPreferences();
zoyLoadAIPreferences();
zoyUpdatePlanDisplay();

if (!localStorage.getItem('zoy_password')) {
  localStorage.setItem('zoy_password', 'password123');
}

setTimeout(zoyRestoreState, 500);

console.log('✓ Zoy AI v3.0.0 ready!');

})();
</script>

</body>
</html>
