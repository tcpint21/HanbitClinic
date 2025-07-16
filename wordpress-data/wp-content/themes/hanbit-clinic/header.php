<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a'
                        },
                        secondary: {
                            500: '#f59e0b',
                            600: '#d97706'
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <!-- 플로팅 네비게이션 -->
    <nav id="floating-nav" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-xl border-b border-gray-200 transition-all duration-300 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">
                <!-- 로고 -->
                <div class="flex items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center space-x-3 text-gray-900 hover:text-blue-600 transition-all duration-300">
                        <span class="text-2xl">🏥</span>
                        <span class="font-bold text-lg lg:text-xl text-blue-600">한빛클리닉</span>
                    </a>
                </div>

                <!-- 데스크톱 메뉴 -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#home" class="nav-link active text-gray-700 hover:text-blue-600 font-medium transition-all duration-300">홈</a>
                    <a href="#departments" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-all duration-300">진료과목</a>
                    <a href="#doctors" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-all duration-300">의료진</a>
                    <a href="#contact" class="nav-link text-gray-700 hover:text-blue-600 font-medium transition-all duration-300">예약/연락처</a>
                </div>

                <!-- 연락처 버튼 -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="tel:02-1234-5678" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                        <span class="mr-2">📞</span>
                        <span>02-1234-5678</span>
                    </a>
                </div>

                <!-- 모바일 메뉴 버튼 -->
                <button class="lg:hidden mobile-menu-toggle p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-gray-100 transition-all duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav> 