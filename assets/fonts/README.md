# 🎨 HƯỚNG DẪN SỬ DỤNG FONT CHO WEBSITE

## 📁 CẤU TRÚC THỨ MỤC FONT
```
assets/fonts/
├── fonts.css              (File định nghĩa các font)
├── README.md              (File hướng dẫn này)
├── font-examples.html     (File demo các font)
├── roboto/               (Font Roboto - Modern Sans Serif)
├── poppins/              (Font Poppins - Trendy Display)
├── opensans/             (Font Open Sans - Clean Reading)
├── montserrat/           (Font Montserrat - Elegant Display)
├── playfair/             (Font Playfair Display - Serif Elegant)
├── inter/                (Font Inter - Modern UI)
├── lato/                 (Font Lato - Humanist)
└── sourcesans/           (Font Source Sans Pro - Adobe UI)
```

## 🚀 CÁCH SỬ DỤNG FONT

### 1. KÍCH HOẠT FONT TRONG WEBSITE
Thêm dòng này vào file HTML (trong thẻ `<head>`):
```html
<link rel="stylesheet" href="assets/fonts/fonts.css">
```

Hoặc import vào file CSS:
```css
@import url('assets/fonts/fonts.css');
```

### 2. SỬ DỤNG FONT TRONG CSS

#### A. Font cho Tiêu đề (Headings)
```css
/* Sử dụng Poppins cho tiêu đề chính */
h1, h2, h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

/* Sử dụng Montserrat cho tiêu đề phụ */
h4, h5, h6 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
}

/* Sử dụng Playfair Display cho tiêu đề elegant */
.elegant-title {
    font-family: 'Playfair Display', serif;
    font-weight: 600;
}
```

#### B. Font cho Nội dung (Body Text)
```css
/* Font chính cho body */
body {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
}

/* Font cho đoạn văn */
p {
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    line-height: 1.6;
}

/* Font cho description */
.description {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
}
```

#### C. Font cho UI Elements
```css
/* Font cho buttons */
.btn {
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
}

/* Font cho navigation */
.nav-link {
    font-family: 'Source Sans Pro', sans-serif;
    font-weight: 400;
}

/* Font cho form inputs */
input, textarea, select {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
}
```

### 3. CÁC FONT WEIGHT CÓ SẴN

#### Roboto (Modern Sans Serif)
- Light (300)
- Regular (400)  
- Medium (500)
- Bold (700)

#### Poppins (Trendy Display)
- Light (300)
- Regular (400)
- Medium (500)
- SemiBold (600)
- Bold (700)

#### Open Sans (Clean Reading)
- Light (300)
- Regular (400)
- SemiBold (600)
- Bold (700)

#### Montserrat (Elegant Display)
- Light (300)
- Regular (400)
- Medium (500)
- SemiBold (600)
- Bold (700)

#### Playfair Display (Serif Elegant)
- Regular (400)
- Medium (500)
- SemiBold (600)
- Bold (700)

#### Inter (Modern UI)
- Light (300)
- Regular (400)
- Medium (500)
- SemiBold (600)  
- Bold (700)

#### Lato (Humanist)
- Light (300)
- Regular (400)
- Bold (700)

#### Source Sans Pro (Adobe UI)
- Light (300)
- Regular (400)
- SemiBold (600)
- Bold (700)

### 4. CÁCH TẢI FONT VỀ MÁY

#### Phương pháp 1: Google Fonts (Khuyến nghị)
1. Truy cập: https://fonts.google.com/
2. Tìm kiếm font bạn muốn (ví dụ: "Poppins")
3. Chọn các font weight cần thiết
4. Click "Download family"
5. Giải nén và copy file .woff2, .woff vào thư mục tương ứng

#### Phương pháp 2: Font Squirrel
1. Truy cập: https://www.fontsquirrel.com/
2. Tìm kiếm font
3. Download và convert sang định dạng web

#### Phương pháp 3: Font libraries khác
- Adobe Fonts: https://fonts.adobe.com/
- Font Library: https://fontlibrary.org/
- DaFont: https://www.dafont.com/

### 5. ĐỊNH DẠNG FILE FONT ĐƯỢC HỖ TRỢ

#### Ưu tiên theo thứ tự:
1. **WOFF2** - Tối ưu nhất, dung lượng nhỏ
2. **WOFF** - Tương thích tốt với các browser cũ  
3. **TTF** - Định dạng gốc, dung lượng lớn hơn
4. **EOT** - Chỉ dành cho Internet Explorer cũ

### 6. CÁC LỚP CSS SẴN CÓ

```css
/* Font families */
.font-roboto { font-family: 'Roboto', sans-serif; }
.font-poppins { font-family: 'Poppins', sans-serif; }
.font-opensans { font-family: 'Open Sans', sans-serif; }
.font-montserrat { font-family: 'Montserrat', sans-serif; }
.font-playfair { font-family: 'Playfair Display', serif; }
.font-inter { font-family: 'Inter', sans-serif; }
.font-lato { font-family: 'Lato', sans-serif; }
.font-sourcesans { font-family: 'Source Sans Pro', sans-serif; }

/* Font weights */
.font-light { font-weight: 300; }
.font-normal { font-weight: 400; }
.font-medium { font-weight: 500; }
.font-semibold { font-weight: 600; }
.font-bold { font-weight: 700; }
```

### 7. VÍ DỤ SỬ DỤNG TRONG HTML

```html
<!-- Tiêu đề chính với Poppins -->
<h1 class="font-poppins font-bold">Tiêu đề chính</h1>

<!-- Đoạn văn với Open Sans -->
<p class="font-opensans font-normal">Đây là đoạn văn bản mẫu...</p>

<!-- Button với Roboto -->
<button class="btn font-roboto font-medium">Click me</button>

<!-- Tiêu đề elegant với Playfair -->
<h2 class="font-playfair font-semibold">Elegant Title</h2>
```

### 8. PERFORMANCE TIPS

#### A. Preload Font quan trọng
```html
<link rel="preload" href="assets/fonts/inter/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
```

#### B. Font-display optimize
```css
@font-face {
    font-family: 'Inter';
    src: url('inter/Inter-Regular.woff2') format('woff2');
    font-display: swap; /* Hiển thị text ngay, swap font khi load xong */
}
```

#### C. Subset fonts (chỉ load ký tự cần thiết)
- Sử dụng công cụ như Google Fonts để chọn subset
- Hoặc dùng fonttools để tạo subset tùy chỉnh

### 9. TROUBLESHOOTING

#### Lỗi font không hiển thị:
1. Kiểm tra đường dẫn file font
2. Kiểm tra CORS policy (nếu load từ domain khác)
3. Kiểm tra định dạng font có được browser hỗ trợ
4. Kiểm tra font-weight có đúng không

#### Tối ưu loading:
1. Chỉ load font weight thực sự cần dùng
2. Sử dụng font-display: swap
3. Preload font quan trọng
4. Sử dụng fallback fonts

### 10. FONT COMBINATIONS GỢI Ý

#### Combo 1: Modern & Clean
- Headings: Poppins (600)
- Body: Inter (400)
- UI: Roboto (500)

#### Combo 2: Elegant & Professional  
- Headings: Montserrat (600)
- Body: Open Sans (400)
- Accent: Playfair Display (600)

#### Combo 3: Minimal & Readable
- All text: Inter (300, 400, 500, 600)

#### Combo 4: Creative & Friendly
- Headings: Poppins (600, 700)
- Body: Lato (400)
- UI: Source Sans Pro (500)

---

## 📞 HỖ TRỢ
Nếu có vấn đề gì với font, hãy kiểm tra:
1. File fonts.css đã được import chưa
2. Đường dẫn font có đúng không  
3. File font có tồn tại trong thư mục không
4. Browser có hỗ trợ định dạng font không

**Chúc bạn thiết kế website đẹp! 🎨**
