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
                radial-gradient(1200px 600px at 15% -10%, rgba(176, 141, 87, 0.08), transparent 60%),
                var(--navy);
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
        <p class="eyebrow">Internal — Dress Code</p>
        <h1>Wednesday Shirt Colour</h1>
        <p class="subhead">One glance, no more asking around. Colour rotates automatically by the real calendar — 1st
            &amp; 3rd &amp; 4th Wednesday white, 2nd Wednesday black.</p>

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

        <p class="strip-label" id="monthLabel">This Month's Wednesdays</p>
        <div class="strip" id="weekStrip"></div>

        <div class="footnote">
            <span><b>Rule —</b> Week of month is counted by each Wednesday's order within the calendar month.</span>
            <span><b>Note —</b> a rare 5th Wednesday defaults to white.</span>
        </div>
    </div>

    <script>
        (function () {
            const COLOR_BY_ORDINAL = { 1: 'white', 2: 'black', 3: 'white', 4: 'white', 5: 'white' };
            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            const now = new Date();
            const year = now.getFullYear();
            const month = now.getMonth();

            // find all Wednesdays in current month
            const wednesdays = [];
            const d = new Date(year, month, 1);
            while (d.getMonth() === month) {
                if (d.getDay() === 3) {
                    wednesdays.push(new Date(d));
                }
                d.setDate(d.getDate() + 1);
            }

            const todayStr = now.toDateString();
            let todayEntry = null;

            // render strip
            const strip = document.getElementById('weekStrip');
            wednesdays.forEach((wed, idx) => {
                const ordinal = idx + 1;
                const color = COLOR_BY_ORDINAL[ordinal] || 'white';
                const isToday = wed.toDateString() === todayStr;
                if (isToday) todayEntry = { wed, ordinal, color };

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

            document.getElementById('monthLabel').textContent = `${monthNames[month]} ${year} — Wednesdays`;

            // hero content
            const todayLabel = document.getElementById('todayLabel');
            const verdictText = document.getElementById('verdictText');
            const dateNote = document.getElementById('dateNote');
            const shirtBase = document.querySelector('.shirt-fill-current.base');
            const shirtShadow = document.querySelector('.shirt-fill-shadow');

            const fullDateStr = `${dayNames[now.getDay()]}, ${monthNames[month]} ${now.getDate()}, ${year}`;

            if (todayEntry) {
                todayLabel.textContent = "Today";
                verdictText.innerHTML = `Wear <span class="colorword">${todayEntry.color === 'white' ? 'White' : 'Black'}</span>`;
                dateNote.innerHTML = `<strong>${fullDateStr}</strong> — ${['1st', '2nd', '3rd', '4th', '5th'][todayEntry.ordinal - 1]} Wednesday of the month.`;
                shirtBase.setAttribute('fill', todayEntry.color === 'white' ? 'var(--shirt-white)' : 'var(--shirt-black)');
                shirtShadow.setAttribute('fill', todayEntry.color === 'white' ? 'var(--shirt-white-shadow)' : 'var(--shirt-black-shadow)');
            } else {
                // not a Wednesday — find the next upcoming Wednesday
                let next = wednesdays.find(w => w > now);
                let nextOrdinal = next ? wednesdays.indexOf(next) + 1 : null;
                if (!next) {
                    // fallback: look into next month's first Wednesday
                    const nd = new Date(year, month + 1, 1);
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
    </script>

</body>

</html>