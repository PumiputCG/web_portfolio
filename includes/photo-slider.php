<?php

function photoNavButtons(bool $isTH): string {
  $prev = $isTH ? 'ภาพก่อนหน้า' : 'Previous photo';
  $next = $isTH ? 'ภาพถัดไป' : 'Next photo';

  return '
            <button class="photo-nav photo-nav-prev" type="button" aria-label="' . $prev . '">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m15 6-6 6 6 6"/></svg>
            </button>
            <button class="photo-nav photo-nav-next" type="button" aria-label="' . $next . '">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m9 6 6 6-6 6"/></svg>
            </button>';
}
