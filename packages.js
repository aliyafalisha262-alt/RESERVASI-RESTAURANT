/* ══════════════════════════════════════════════════
   SAVEUR — PACKAGES PAGE JAVASCRIPT
   packages.js
   ══════════════════════════════════════════════════ */

/* ── FILTER CARDS ───────────────────────────────── */
function filterCards(cat, btn) {
  // Update active button
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  // Show / hide cards with animation
  document.querySelectorAll('.pkg-card').forEach(card => {
    const show = cat === 'all' || card.dataset.cat === cat;

    card.style.transition = 'opacity 0.4s, transform 0.4s';

    if (show) {
      card.style.display   = '';
      // Force reflow so transition plays
      void card.offsetWidth;
      card.style.opacity   = '1';
      card.style.transform = '';
    } else {
      card.style.opacity   = '0';
      card.style.transform = 'translateY(10px) scale(0.97)';
      setTimeout(() => {
        if (card.style.opacity === '0') card.style.display = 'none';
      }, 400);
    }
  });
}

/* ── OPEN MODAL ─────────────────────────────────── */
function openModal(name, price, cat) {
  const titleMap = {
    'Classic Elegance':  'Classic <em>Elegance</em>',
    'Grand Tasting':     'Grand <em>Tasting</em>',
    'Sunset Romance':    'Sunset <em>Romance</em>',
    'The Private Salon': 'The Private <em>Salon</em>',
    'Weekend Brunch':    'Weekend <em>Brunch</em>',
    'Grand Anniversary': 'Grand <em>Anniversary</em>',
  };

  // Set modal title
  document.getElementById('modalTitle').innerHTML = titleMap[name] || name;

  // Set modal price
  const priceNum = price.replace('Rp ', '');
  document.getElementById('modalPrice').innerHTML =
    `<sup>Rp</sup> ${priceNum}<span style="font-size:14px;color:var(--text-muted);font-family:var(--font-body);font-weight:300"> / package</span>`;

  // Show modal
  document.getElementById('modalOverlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}

/* ── CLOSE MODAL ────────────────────────────────── */
function closeModal() {
  document.getElementById('modalOverlay').classList.remove('open');
  document.body.style.overflow = '';
}

/* Close when clicking the dark overlay background */
function handleOverlayClick(e) {
  if (e.target === document.getElementById('modalOverlay')) closeModal();
}

/* Close on Escape key */
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeModal();
});

/* ── SUBMIT BOOKING ─────────────────────────────── */
function submitBooking() {
  const btn = document.querySelector('.modal-submit');

  // Success state
  btn.innerHTML = '<span>✓ Reservation Confirmed!</span>';
  btn.style.background = 'linear-gradient(135deg, #2d6b2d, #3d8b3d)';

  // Reset and close after 2 seconds
  setTimeout(() => {
    closeModal();
    btn.innerHTML = '<span>Confirm Reservation</span><span>→</span>';
    btn.style.background = '';
  }, 2000);
}
