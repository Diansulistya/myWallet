<?php

if (!function_exists('formatRupiah')) {
    /**
     * Format number to Indonesian Rupiah currency format
     *
     * @param float $amount
     * @return string
     */
    function formatRupiah($amount)
    {
        return 'Rp ' . number_format($amount, 0, ',', '.');
    }
}