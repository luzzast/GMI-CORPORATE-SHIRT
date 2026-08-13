<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wednesday Attire — Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap"
    rel="stylesheet">
  <style>
    :root {
      --navy: #161B22;
      --panel: #1F2733;
      --panel-edge: #2A3441;
      --paper: #F4F5F3;
      --brass: #B08D57;
      --brass-soft: rgba(176, 141, 87, 0.16);
      --shirt-white: #F7F7F5;
      --shirt-white-shadow: #D8D9D4;
      --shirt-black: #16171A;
      --shirt-black-shadow: #000000;
      --muted: #8B93A1;
      --radius: 14px;
    }

    * {
      box-sizing: border-box;
    }

    html,
    body {
      margin: 0;
      padding: 0;
    }

    body {
      min-height: 100vh;
      background:
        linear-gradient(180deg, rgba(22, 27, 34, 0.88), rgba(22, 27, 34, 0.94) 40%, var(--navy) 75%),
        radial-gradient(1200px 600px at 15% -10%, rgba(176, 141, 87, 0.10), transparent 60%),
        url('gmicampus.jpg');
      background-size: cover;
      background-position: center top;
      background-attachment: fixed;
      color: var(--paper);
      font-family: 'Inter', sans-serif;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      padding: 56px 20px 80px;
    }

    .dashboard {
      width: 100%;
      max-width: 880px;
    }

    /* ---------- Header ---------- */
    .brand-row {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 28px;
    }

    .brand-mark {
      width: 50px;
      height: 50px;
      border-radius: 8px;
      border: 1px dashed var(--panel-edge);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--muted);
      font-family: 'Space Grotesk', sans-serif;
      font-size: 13px;
      font-weight: 700;
      flex-shrink: 0;
      overflow: hidden;
    }

    .brand-mark {
      width: 50px;
      height: 50px;
      border-radius: 8px;
      border: 1px solid var(--panel-edge);
      background: #F4F5F3;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--muted);
      font-family: 'Space Grotesk', sans-serif;
      font-size: 13px;
      font-weight: 700;
      flex-shrink: 0;
      overflow: hidden;
      padding: 0px;
    }

    .brand-mark img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      background-color: #a8ddfb;
    }

    .brand-name {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 14px;
      font-weight: 600;
      color: var(--muted);
      letter-spacing: 0.02em;
    }

    .eyebrow {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 12px;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--brass);
      margin: 0 0 10px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .eyebrow::before {
      content: "";
      width: 22px;
      height: 1px;
      background: var(--brass);
      display: inline-block;
    }

    h1 {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 600;
      font-size: clamp(26px, 4vw, 36px);
      line-height: 1.15;
      margin: 0 0 6px;
      letter-spacing: -0.01em;
    }

    .subhead {
      color: var(--muted);
      font-size: 14.5px;
      margin: 0 0 36px;
      max-width: 520px;
      line-height: 1.55;
    }

    /* ---------- Hero card ---------- */
    .hero {
      background: linear-gradient(180deg, var(--panel), var(--panel) 60%, #1B2431);
      border: 1px solid var(--panel-edge);
      border-radius: var(--radius);
      padding: 36px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 32px;
      position: relative;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: linear-gradient(120deg, transparent 40%, var(--brass-soft) 50%, transparent 60%);
      opacity: 0;
      pointer-events: none;
    }

    .hero-text .today-label {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 12px;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 0 0 12px;
    }

    .hero-text .verdict {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: clamp(34px, 5vw, 48px);
      line-height: 1;
      margin: 0 0 14px;
      letter-spacing: -0.01em;
    }

    .verdict .colorword {
      position: relative;
    }

    .hero-text .date-note {
      color: var(--muted);
      font-size: 14px;
      margin: 0;
    }

    .hero-text .date-note strong {
      color: var(--paper);
      font-weight: 500;
    }

    /* ---------- Shirt SVG + slow corporate hover ---------- */
    .shirt-stage {
      width: 190px;
      height: 190px;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .shirt-stage svg {
      width: 150px;
      height: 150px;
      overflow: visible;
    }

    .shirt-fill-current {
      transition: fill 1.4s cubic-bezier(.22, .61, .36, 1), opacity 1.4s cubic-bezier(.22, .61, .36, 1);
    }

    .shirt-fill-shadow {
      transition: fill 1.4s cubic-bezier(.22, .61, .36, 1);
    }

    .shirt-stage:hover .garment {
      transform: translateY(-3px);
    }

    .garment {
      transition: transform 1.2s cubic-bezier(.22, .61, .36, 1);
    }

    .shirt-stage:hover .shirt-fill-current.alt {
      opacity: 1;
    }

    .shirt-fill-current.alt {
      opacity: 0;
      transition: opacity 1.6s cubic-bezier(.22, .61, .36, 1);
    }

    .stitch {
      stroke-dasharray: 3 4;
      stroke: var(--brass);
      opacity: 0.55;
    }

    /* ---------- Week strip ---------- */
    .strip-label {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 12px;
      letter-spacing: 0.16em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 44px 0 16px;
    }

    .strip-label-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 44px 0 16px;
    }

    .strip-label-row .strip-label {
      margin: 0;
    }

    .month-nav {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .month-nav button {
      background: var(--panel);
      border: 1px solid var(--panel-edge);
      color: var(--paper);
      width: 28px;
      height: 28px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: border-color .5s ease, color .5s ease;
    }

    .month-nav button:hover {
      border-color: var(--brass);
      color: var(--brass);
    }

    .month-nav button:disabled {
      opacity: 0.35;
      cursor: default;
    }

    .month-nav button:disabled:hover {
      border-color: var(--panel-edge);
      color: var(--paper);
    }

    .month-nav .reset-link {
      font-size: 11.5px;
      color: var(--brass);
      cursor: pointer;
      background: none;
      border: none;
      width: auto;
      padding: 0 2px;
    }

    .strip {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 12px;
    }

    .week-card {
      background: var(--panel);
      border: 1px solid var(--panel-edge);
      border-radius: 10px;
      padding: 18px 18px 20px;
      position: relative;
      transition: border-color .6s ease, transform .6s ease;
    }

    .week-card:hover {
      border-color: var(--brass);
      transform: translateY(-2px);
    }

    .week-card.is-today {
      border-color: var(--brass);
      background: linear-gradient(180deg, #232C3A, var(--panel));
    }

    .week-card.is-today::before {
      content: "TODAY";
      position: absolute;
      top: -9px;
      left: 14px;
      background: var(--brass);
      color: #1a1408;
      font-family: 'Space Grotesk', sans-serif;
      font-size: 9.5px;
      font-weight: 700;
      letter-spacing: 0.12em;
      padding: 2px 8px;
      border-radius: 20px;
    }

    .week-ordinal {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 11px;
      letter-spacing: 0.1em;
      color: var(--muted);
      text-transform: uppercase;
      margin: 0 0 8px;
    }

    .week-date {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 19px;
      font-weight: 600;
      margin: 0 0 14px;
    }

    .swatch-row {
      display: flex;
      align-items: center;
      gap: 9px;
    }

    .swatch {
      width: 15px;
      height: 15px;
      border-radius: 4px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      flex-shrink: 0;
    }

    .swatch.white {
      background: var(--shirt-white);
    }

    .swatch.black {
      background: var(--shirt-black);
      border-color: rgba(255, 255, 255, 0.1);
    }

    .swatch-text {
      font-size: 13.5px;
      font-weight: 500;
    }

    /* ---------- Clock + Prayer times ---------- */
    .info-grid {
      display: grid;
      grid-template-columns: 200px 1fr;
      gap: 12px;
      margin-top: 44px;
    }

    .clock-card {
      background: var(--panel);
      border: 1px solid var(--panel-edge);
      border-radius: 10px;
      padding: 22px 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .clock-time {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 32px;
      letter-spacing: -0.01em;
      font-variant-numeric: tabular-nums;
    }

    .clock-date {
      color: var(--muted);
      font-size: 12.5px;
      margin-top: 6px;
    }

    .prayer-card {
      background: var(--panel);
      border: 1px solid var(--panel-edge);
      border-radius: 10px;
      padding: 20px 22px;
    }

    .prayer-card-head {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      margin-bottom: 14px;
      flex-wrap: wrap;
      gap: 6px;
    }

    .prayer-zone {
      font-size: 12px;
      color: var(--muted);
    }

    .prayer-row {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 8px;
    }

    .prayer-item {
      text-align: center;
      padding: 10px 4px;
      border-radius: 8px;
      transition: background .6s ease, border-color .6s ease;
      border: 1px solid transparent;
    }

    .prayer-item.is-next {
      border-color: var(--brass);
      background: var(--brass-soft);
    }

    .prayer-name {
      font-size: 10.5px;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--muted);
      margin: 0 0 6px;
    }

    .prayer-item.is-next .prayer-name {
      color: var(--brass);
    }

    .prayer-value {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 15px;
      font-weight: 600;
      margin: 0;
    }

    .prayer-note {
      margin-top: 14px;
      font-size: 12px;
      color: var(--muted);
    }

    @media (max-width:640px) {
      .info-grid {
        grid-template-columns: 1fr;
      }

      .prayer-row {
        grid-template-columns: repeat(3, 1fr);
        row-gap: 14px;
      }
    }

    /* ---------- Footer note ---------- */
    .footnote {
      margin-top: 32px;
      padding-top: 20px;
      border-top: 1px solid var(--panel-edge);
      color: var(--muted);
      font-size: 12.5px;
      line-height: 1.6;
      display: flex;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
    }

    .footnote b {
      color: var(--muted);
      font-weight: 600;
    }

    @media (max-width:560px) {
      .hero {
        flex-direction: column-reverse;
        text-align: center;
        padding: 28px 24px;
      }

      .hero-text .date-note,
      .hero-text .today-label {
        text-align: center;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      * {
        transition: none !important;
      }
    }
  </style>
</head>

<body>

  <div class="dashboard">
    <div class="brand-row">
      <div class="brand-mark">
        <img src="gmilogoold.png" alt="German-Malaysian Institute"
          onerror="this.onerror=null; this.style.display='none'; this.parentElement.textContent='GMI';">
      </div>
      <span class="brand-name">German-Malaysian Institute</span>
    </div>
    <p class="eyebrow">Internal — Dress Code</p>
    <h1>Wednesday Shirt Colour</h1>
    <p class="subhead">One glance, no more asking around. Colour rotates automatically by the real calendar — 1st &amp;
      3rd Wednesday white, 2nd &amp; 4th Wednesday black.</p>

    <div class="info-grid" style="margin-top:0;">
      <div class="clock-card">
        <div class="clock-time" id="clockTime">--:--:--</div>
        <div class="clock-date" id="clockDate">Loading…</div>
      </div>
      <div class="prayer-card">
        <div class="prayer-card-head">
          <p class="strip-label" style="margin:0;">Prayer Times Today</p>
          <span class="prayer-zone" id="prayerZoneLabel">Zone SGR01 — Kajang / Selangor</span>
        </div>
        <div class="prayer-row" id="prayerRow">
          <div class="prayer-item">
            <p class="prayer-name">Imsak</p>
            <p class="prayer-value">--:--</p>
          </div>
          <div class="prayer-item">
            <p class="prayer-name">Subuh</p>
            <p class="prayer-value">--:--</p>
          </div>
          <div class="prayer-item">
            <p class="prayer-name">Zohor</p>
            <p class="prayer-value">--:--</p>
          </div>
          <div class="prayer-item">
            <p class="prayer-name">Asar</p>
            <p class="prayer-value">--:--</p>
          </div>
          <div class="prayer-item">
            <p class="prayer-name">Maghrib</p>
            <p class="prayer-value">--:--</p>
          </div>
          <div class="prayer-item">
            <p class="prayer-name">Isyak</p>
            <p class="prayer-value">--:--</p>
          </div>
        </div>
        <p class="prayer-note" id="prayerNote">Fetching today's prayer schedule…</p>
      </div>
    </div>
    <br>
    <div class="hero">
      <div class="hero-text">
        <p class="today-label" id="todayLabel">Loading…</p>
        <h2 class="verdict" id="verdictText">—</h2>
        <p class="date-note" id="dateNote">—</p>
      </div>
      <div class="shirt-stage">
        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <g class="garment">
            <!-- base shadow shape -->
            <path class="shirt-fill-shadow"
              d="M35 12 L25 20 L14 30 L22 40 L28 35 L28 88 L72 88 L72 35 L78 40 L86 30 L75 20 L65 12 L58 18 C55 21 45 21 42 18 Z"
              fill="var(--shirt-white-shadow)" />
            <!-- current colour layer -->
            <path class="shirt-fill-current base"
              d="M35 10 L25 18 L14 28 L22 38 L28 33 L28 86 L72 86 L72 33 L78 38 L86 28 L75 18 L65 10 L58 16 C55 19 45 19 42 16 Z"
              fill="var(--shirt-white)" />
            <!-- alternate colour layer (revealed on hover for tactile feedback) -->
            <path class="shirt-fill-current alt"
              d="M35 10 L25 18 L14 28 L22 38 L28 33 L28 86 L72 86 L72 33 L78 38 L86 28 L75 18 L65 10 L58 16 C55 19 45 19 42 16 Z"
              fill="var(--brass)" opacity="0" />
            <path class="stitch" d="M42 16 C45 19 55 19 58 16" stroke-width="1" fill="none" />
            <line class="stitch" x1="50" y1="20" x2="50" y2="86" stroke-width="1" />
          </g>
        </svg>
      </div>
    </div>

    <div class="strip-label-row">
      <p class="strip-label" id="monthLabel">This Month's Wednesdays</p>
      <div class="month-nav">
        <button id="prevMonthBtn" aria-label="Previous month">‹</button>
        <button class="reset-link" id="resetMonthBtn">Today</button>
        <button id="nextMonthBtn" aria-label="Next month">›</button>
      </div>
    </div>
    <div class="strip" id="weekStrip"></div>

    <div class="footnote">
      <span><b>Rule —</b> Week of month is counted by each Wednesday's order within the calendar month.</span>
      <span><b>Note —</b> a rare 5th Wednesday defaults to white. Prayer times from JAKIM e-Solat (zone SGR01).</span>
    </div>
  </div>

  <script>
    (function () {
      const COLOR_BY_ORDINAL = { 1: 'white', 2: 'black', 3: 'white', 4: 'black', 5: 'white' };
      const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

      const realNow = new Date();
      const realYear = realNow.getFullYear();
      const realMonth = realNow.getMonth();
      const todayStr = realNow.toDateString();

      // viewYear/viewMonth track whichever month the strip is currently showing —
      // independent from "today", so browsing months never touches the hero card.
      let viewYear = realYear;
      let viewMonth = realMonth;

      const strip = document.getElementById('weekStrip');
      const monthLabel = document.getElementById('monthLabel');
      const prevBtn = document.getElementById('prevMonthBtn');
      const nextBtn = document.getElementById('nextMonthBtn');
      const resetBtn = document.getElementById('resetMonthBtn');

      function getWednesdays(year, month) {
        const list = [];
        const d = new Date(year, month, 1);
        while (d.getMonth() === month) {
          if (d.getDay() === 3) list.push(new Date(d));
          d.setDate(d.getDate() + 1);
        }
        return list;
      }

      function renderStrip(year, month) {
        const wednesdays = getWednesdays(year, month);
        strip.innerHTML = '';
        wednesdays.forEach((wed, idx) => {
          const ordinal = idx + 1;
          const color = COLOR_BY_ORDINAL[ordinal] || 'white';
          const isToday = wed.toDateString() === todayStr;

          const card = document.createElement('div');
          card.className = 'week-card' + (isToday ? ' is-today' : '');

          const ordLabel = ['1st', '2nd', '3rd', '4th', '5th'][idx] + ' Wednesday';
          card.innerHTML = `
        <p class="week-ordinal">${ordLabel}</p>
        <p class="week-date">${monthNames[month].slice(0, 3)} ${wed.getDate()}</p>
        <div class="swatch-row">
          <span class="swatch ${color}"></span>
          <span class="swatch-text">${color === 'white' ? 'White shirt' : 'Black shirt'}</span>
        </div>
      `;
          strip.appendChild(card);
        });

        monthLabel.textContent = `${monthNames[month]} ${year} — Wednesdays`;

        // limit how far back/forward browsing goes (12 months either side)
        const monthsFromReal = (year - realYear) * 12 + (month - realMonth);
        prevBtn.disabled = monthsFromReal <= -12;
        nextBtn.disabled = monthsFromReal >= 12;
        resetBtn.style.display = (year === realYear && month === realMonth) ? 'none' : 'inline-flex';
      }

      prevBtn.addEventListener('click', () => {
        viewMonth--;
        if (viewMonth < 0) { viewMonth = 11; viewYear--; }
        renderStrip(viewYear, viewMonth);
      });
      nextBtn.addEventListener('click', () => {
        viewMonth++;
        if (viewMonth > 11) { viewMonth = 0; viewYear++; }
        renderStrip(viewYear, viewMonth);
      });
      resetBtn.addEventListener('click', () => {
        viewYear = realYear; viewMonth = realMonth;
        renderStrip(viewYear, viewMonth);
      });

      renderStrip(viewYear, viewMonth);

      // ---------- Hero (always reflects the real current day, never the browsed month) ----------
      const realWednesdays = getWednesdays(realYear, realMonth);
      let todayEntry = null;
      realWednesdays.forEach((wed, idx) => {
        if (wed.toDateString() === todayStr) {
          const ordinal = idx + 1;
          todayEntry = { wed, ordinal, color: COLOR_BY_ORDINAL[ordinal] || 'white' };
        }
      });

      const todayLabel = document.getElementById('todayLabel');
      const verdictText = document.getElementById('verdictText');
      const dateNote = document.getElementById('dateNote');
      const shirtBase = document.querySelector('.shirt-fill-current.base');
      const shirtShadow = document.querySelector('.shirt-fill-shadow');

      const fullDateStr = `${dayNames[realNow.getDay()]}, ${monthNames[realMonth]} ${realNow.getDate()}, ${realYear}`;

      if (todayEntry) {
        todayLabel.textContent = "Today";
        verdictText.innerHTML = `Wear <span class="colorword">${todayEntry.color === 'white' ? 'White' : 'Black'}</span>`;
        dateNote.innerHTML = `<strong>${fullDateStr}</strong> — ${['1st', '2nd', '3rd', '4th', '5th'][todayEntry.ordinal - 1]} Wednesday of the month.`;
        shirtBase.setAttribute('fill', todayEntry.color === 'white' ? 'var(--shirt-white)' : 'var(--shirt-black)');
        shirtShadow.setAttribute('fill', todayEntry.color === 'white' ? 'var(--shirt-white-shadow)' : 'var(--shirt-black-shadow)');
      } else {
        // not a Wednesday — find the next upcoming Wednesday
        let next = realWednesdays.find(w => w > realNow);
        let nextOrdinal = next ? realWednesdays.indexOf(next) + 1 : null;
        if (!next) {
          const nd = new Date(realYear, realMonth + 1, 1);
          while (nd.getDay() !== 3) { nd.setDate(nd.getDate() + 1); }
          next = nd; nextOrdinal = 1;
        }
        const nextColor = COLOR_BY_ORDINAL[nextOrdinal] || 'white';
        todayLabel.textContent = "Not a Wednesday — next up";
        verdictText.innerHTML = `Wear <span class="colorword">${nextColor === 'white' ? 'White' : 'Black'}</span>`;
        dateNote.innerHTML = `Today is <strong>${fullDateStr}</strong>. Next Wednesday is <strong>${monthNames[next.getMonth()]} ${next.getDate()}</strong> — ${['1st', '2nd', '3rd', '4th', '5th'][nextOrdinal - 1]} Wednesday.`;
        shirtBase.setAttribute('fill', nextColor === 'white' ? 'var(--shirt-white)' : 'var(--shirt-black)');
        shirtShadow.setAttribute('fill', nextColor === 'white' ? 'var(--shirt-white-shadow)' : 'var(--shirt-black-shadow)');
      }
    })();

    // ---------- Live clock (Malaysia time) ----------
    (function () {
      const timeEl = document.getElementById('clockTime');
      const dateEl = document.getElementById('clockDate');
      function tick() {
        const now = new Date();
        timeEl.textContent = now.toLocaleTimeString('en-MY', { hour12: false, timeZone: 'Asia/Kuala_Lumpur' });
        dateEl.textContent = now.toLocaleDateString('en-MY', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric', timeZone: 'Asia/Kuala_Lumpur' });
      }
      tick();
      setInterval(tick, 1000);
    })();

    // ---------- Prayer times (JAKIM e-Solat via waktusolat.app) ----------
    (function () {
      const ZONE = 'SGR01'; // change this to your area's zone code — see https://api.waktusolat.app/zones
      const noteEl = document.getElementById('prayerNote');
      const items = document.querySelectorAll('#prayerRow .prayer-item');
      const order = ['imsak', 'fajr', 'dhuhr', 'asr', 'maghrib', 'isha'];

      fetch(`https://api.waktusolat.app/v2/solat/${ZONE}`)
        .then(res => {
          if (!res.ok) throw new Error('Request failed');
          return res.json();
        })
        .then(data => {
          const todayNum = new Date().toLocaleString('en-US', { day: 'numeric', timeZone: 'Asia/Kuala_Lumpur' });
          const todayEntry = data.prayers.find(p => String(p.day) === String(Number(todayNum)));
          if (!todayEntry) throw new Error('No entry for today');

          // Imsak isn't in v2 payload — approximate as 10 min before Subuh (fajr)
          const fajrDate = new Date(todayEntry.fajr * 1000);
          const imsakDate = new Date(fajrDate.getTime() - 10 * 60 * 1000);

          const times = {
            imsak: imsakDate,
            fajr: fajrDate,
            dhuhr: new Date(todayEntry.dhuhr * 1000),
            asr: new Date(todayEntry.asr * 1000),
            maghrib: new Date(todayEntry.maghrib * 1000),
            isha: new Date(todayEntry.isha * 1000)
          };

          const fmt = t => t.toLocaleTimeString('en-MY', { hour: '2-digit', minute: '2-digit', hour12: false, timeZone: 'Asia/Kuala_Lumpur' });

          // find the next upcoming prayer (compare against fajr..isha only, not imsak)
          const now = new Date();
          const comparable = ['fajr', 'dhuhr', 'asr', 'maghrib', 'isha'];
          let nextKey = comparable.find(k => times[k] > now);

          order.forEach((key, idx) => {
            const el = items[idx];
            el.querySelector('.prayer-value').textContent = fmt(times[key]);
            el.classList.toggle('is-next', key === nextKey);
          });

          noteEl.textContent = nextKey
            ? `Next: ${nextKey.charAt(0).toUpperCase() + nextKey.slice(1)} at ${fmt(times[nextKey])}`
            : `That's Isyak done for today — next up is Imsak tomorrow.`;
        })
        .catch(err => {
          noteEl.textContent = "Couldn't load live prayer times right now — check e-solat.gov.my directly.";
        });
    })();
  </script>

</body>

</html>