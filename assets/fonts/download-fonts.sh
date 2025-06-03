#!/bin/bash

# Font Download Script for CSA Vietnam Co.
# Tự động tải các font cần thiết từ Google Fonts

echo "🎨 Bắt đầu tải font cho CSA Vietnam Co..."

# Tạo thư mục tạm
mkdir -p temp_fonts

# Function để tải font từ Google Fonts
download_font() {
    local font_name=$1
    local font_folder=$2
    
    echo "📥 Đang tải $font_name..."
    
    # Tải font từ Google Fonts API
    curl -s "https://fonts.googleapis.com/css2?family=${font_name}:wght@300;400;500;600;700&display=swap" > temp_fonts/${font_folder}.css
    
    # Parse CSS để lấy link font files
    grep -o 'https://[^)]*\.woff2' temp_fonts/${font_folder}.css | while read url; do
        filename=$(basename "$url")
        curl -s "$url" -o "${font_folder}/$filename"
        echo "  ✅ Đã tải $filename"
    done
}

# Tải các font chính
echo "🔄 Tải Roboto..."
download_font "Roboto" "roboto"

echo "🔄 Tải Poppins..."  
download_font "Poppins" "poppins"

echo "🔄 Tải Open+Sans..."
download_font "Open+Sans" "opensans"

echo "🔄 Tải Montserrat..."
download_font "Montserrat" "montserrat"

echo "🔄 Tải Playfair+Display..."
download_font "Playfair+Display" "playfair"

echo "🔄 Tải Inter..."
download_font "Inter" "inter"

echo "🔄 Tải Lato..."
download_font "Lato" "lato"

echo "🔄 Tải Source+Sans+Pro..."
download_font "Source+Sans+Pro" "sourcesans"

# Dọn dẹp
rm -rf temp_fonts

echo "🎉 Hoàn thành! Tất cả font đã được tải về."
echo ""
echo "📋 Hướng dẫn sử dụng:"
echo "1. Thêm vào HTML: <link rel='stylesheet' href='assets/fonts/fonts.css'>"
echo "2. Hoặc import vào CSS: @import url('assets/fonts/fonts.css');"
echo "3. Xem demo tại: assets/fonts/font-examples.html"
echo "4. Đọc hướng dẫn chi tiết tại: assets/fonts/README.md"
