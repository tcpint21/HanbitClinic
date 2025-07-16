<?php get_header(); ?>

<!-- 히어로 섹션 -->
<section id="home" class="relative min-h-[80vh] flex items-center justify-center overflow-hidden pt-16 bg-gradient-to-br from-blue-50 via-white to-blue-50">
    <!-- 차분한 배경 패턴 -->
    <div class="absolute inset-0">
        <!-- 메인 오버레이 -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 via-blue-700/5 to-blue-800/10"></div>
        
        <!-- 부드러운 원형 패턴들 -->
        <div class="absolute top-10 right-10 w-64 h-64 bg-blue-100/50 rounded-full blur-2xl"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 bg-blue-200/30 rounded-full blur-2xl"></div>
        <div class="absolute top-1/3 left-1/4 w-48 h-48 bg-blue-100/40 rounded-full blur-2xl"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- 배지 -->
        <div class="inline-flex items-center px-6 py-3 bg-blue-600 text-white text-sm font-medium mb-8 rounded-full shadow-lg">
            <span class="mr-2">🏥</span>
            <span class="font-semibold">믿을 수 있는 의료 서비스</span>
        </div>

        <!-- 메인 타이틀 -->
        <h1 class="text-4xl lg:text-6xl font-bold mb-8 leading-tight text-gray-900">
            <span class="text-blue-600">건강한 삶</span>을 위한<br>
            <span class="block mt-2 text-gray-800">한빛 클리닉</span>
        </h1>

        <!-- 설명 -->
        <p class="text-xl lg:text-2xl text-gray-600 mb-12 max-w-3xl mx-auto leading-relaxed">
            최신 의료 장비와 풍부한 경험을 바탕으로<br>
            <span class="text-blue-600 font-semibold">환자 중심의 맞춤형 진료</span>를 제공합니다
        </p>

        <!-- 버튼 그룹 -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
            <a href="#contact" class="group inline-flex items-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                <span class="text-lg">진료 예약</span>
                <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            <a href="#departments" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 font-semibold rounded-lg border-2 border-blue-600 hover:bg-blue-50 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                <span class="mr-3">📋</span>
                <span class="text-lg">진료과목</span>
            </a>
        </div>

        <!-- 통계 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center p-6 bg-white rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-3xl lg:text-4xl font-bold text-blue-600 mb-2">15+</div>
                <div class="text-gray-600 font-medium">년 경력</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-3xl lg:text-4xl font-bold text-blue-600 mb-2">5,000+</div>
                <div class="text-gray-600 font-medium">만족한 환자</div>
            </div>
            <div class="text-center p-6 bg-white rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition-all duration-300">
                <div class="text-3xl lg:text-4xl font-bold text-blue-600 mb-2">24/7</div>
                <div class="text-gray-600 font-medium">응급 상담</div>
            </div>
        </div>
    </div>
</section>

<!-- 진료과목 섹션 -->
<section id="departments" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 섹션 헤더 -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-primary-700 text-white text-sm font-semibold rounded-full mb-6">
                진료 분야
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">전문 진료과목</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">각 분야별 전문의가 최고 수준의 의료 서비스를 제공합니다</p>
        </div>

        <!-- 진료과목 그리드 -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- 일반내과 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center text-2xl">
                        🩺
                    </div>
                    <span class="text-xs font-bold text-primary-600 bg-primary-50 px-3 py-1 rounded-full">GENERAL</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">일반내과</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">고혈압, 당뇨, 고지혈증 등<br>만성질환의 체계적 관리</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-primary-600">
                        <span class="mr-2">•</span>
                        <span>정기 검진</span>
                    </div>
                    <div class="flex items-center text-sm text-primary-600">
                        <span class="mr-2">•</span>
                        <span>만성질환 관리</span>
                    </div>
                    <div class="flex items-center text-sm text-primary-600">
                        <span class="mr-2">•</span>
                        <span>건강 상담</span>
                    </div>
                </div>
            </div>

            <!-- 호흡기내과 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center text-2xl">
                        🫁
                    </div>
                    <span class="text-xs font-bold text-green-600 bg-green-50 px-3 py-1 rounded-full">RESPIRATORY</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">호흡기내과</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">기침, 호흡곤란, 폐질환<br>전문 진단 및 치료</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-green-600">
                        <span class="mr-2">•</span>
                        <span>폐기능 검사</span>
                    </div>
                    <div class="flex items-center text-sm text-green-600">
                        <span class="mr-2">•</span>
                        <span>기관지염 치료</span>
                    </div>
                    <div class="flex items-center text-sm text-green-600">
                        <span class="mr-2">•</span>
                        <span>알레르기 관리</span>
                    </div>
                </div>
            </div>

            <!-- 순환기내과 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center text-2xl">
                        ❤️
                    </div>
                    <span class="text-xs font-bold text-red-600 bg-red-50 px-3 py-1 rounded-full">CARDIOLOGY</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">순환기내과</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">심장질환, 혈관질환<br>정밀 진단 및 관리</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-red-600">
                        <span class="mr-2">•</span>
                        <span>심전도 검사</span>
                    </div>
                    <div class="flex items-center text-sm text-red-600">
                        <span class="mr-2">•</span>
                        <span>혈압 관리</span>
                    </div>
                    <div class="flex items-center text-sm text-red-600">
                        <span class="mr-2">•</span>
                        <span>심장 초음파</span>
                    </div>
                </div>
            </div>

            <!-- 검진센터 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center text-2xl">
                        🔬
                    </div>
                    <span class="text-xs font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">CHECKUP</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">검진센터</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">종합건강검진, 암검진<br>맞춤형 특수검진</p>
                <div class="space-y-2">
                    <div class="flex items-center text-sm text-purple-600">
                        <span class="mr-2">•</span>
                        <span>종합검진</span>
                    </div>
                    <div class="flex items-center text-sm text-purple-600">
                        <span class="mr-2">•</span>
                        <span>암 검진</span>
                    </div>
                    <div class="flex items-center text-sm text-purple-600">
                        <span class="mr-2">•</span>
                        <span>기업 검진</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 의료진 소개 -->
<section id="doctors" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 섹션 헤더 -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-600 to-primary-700 text-white text-sm font-semibold rounded-full mb-6">
                의료진
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">전문 의료진</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">풍부한 임상경험과 전문성을 갖춘 의료진이 함께합니다</p>
        </div>

        <!-- 의료진 카드 -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
                <div class="md:flex">
                    <!-- 의사 이미지 영역 -->
                    <div class="md:w-1/3 bg-gradient-to-br from-primary-600 to-primary-800 p-8 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-32 h-32 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-6">
                                <span class="text-6xl">👨‍⚕️</span>
                            </div>
                            <div class="bg-white/90 backdrop-blur-sm text-primary-700 px-4 py-2 rounded-full text-sm font-semibold inline-block">
                                원장
                            </div>
                        </div>
                    </div>

                    <!-- 의사 정보 영역 -->
                    <div class="md:w-2/3 p-8">
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">김한빛 원장</h3>
                        <p class="text-xl text-primary-600 font-semibold mb-6">내과 전문의</p>
                        
                        <!-- 전문 분야 -->
                        <div class="flex flex-wrap gap-2 mb-8">
                            <span class="px-4 py-2 bg-primary-50 text-primary-700 rounded-full text-sm font-medium">일반내과</span>
                            <span class="px-4 py-2 bg-primary-50 text-primary-700 rounded-full text-sm font-medium">소화기내과</span>
                        </div>

                        <!-- 학력 및 경력 -->
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center text-gray-700">
                                <span class="text-xl mr-3">🎓</span>
                                <span>서울대학교 의과대학 졸업</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="text-xl mr-3">🏥</span>
                                <span>서울대학교병원 내과 전문의</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <span class="text-xl mr-3">📜</span>
                                <span>대한내과학회 정회원</span>
                            </div>
                        </div>

                        <!-- 경력 통계 -->
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="text-3xl font-bold text-primary-600 mb-1">15+</div>
                                <div class="text-sm text-gray-600">년 경력</div>
                            </div>
                            <div class="text-center p-4 bg-gray-50 rounded-xl">
                                <div class="text-3xl font-bold text-primary-600 mb-1">3,000+</div>
                                <div class="text-sm text-gray-600">진료 케이스</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 진료시간 및 연락처 -->
<section id="contact" class="py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- 진료시간 및 연락처 정보 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">진료시간</h2>
                
                <!-- 진료시간 -->
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between items-center py-4 border-b border-gray-200">
                        <span class="font-semibold text-gray-900">평일</span>
                        <span class="text-primary-600 font-semibold">09:00 - 18:00</span>
                    </div>
                    <div class="flex justify-between items-center py-4 border-b border-gray-200">
                        <span class="font-semibold text-gray-900">토요일</span>
                        <span class="text-primary-600 font-semibold">09:00 - 13:00</span>
                    </div>
                    <div class="flex justify-between items-center py-4">
                        <span class="font-semibold text-gray-900">일요일/공휴일</span>
                        <span class="text-red-500 font-semibold">휴진</span>
                    </div>
                </div>

                <!-- 연락처 정보 -->
                <div class="bg-primary-50 rounded-2xl p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">연락처</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <span class="text-primary-600 mr-3">📞</span>
                            <span class="font-medium">02-1234-5678</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-primary-600 mr-3">📍</span>
                            <span class="font-medium">서울시 강남구 테헤란로 123</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 예약 문의 폼 -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">진료 예약 문의</h2>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">이름</label>
                        <input type="text" placeholder="이름을 입력해주세요" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">연락처</label>
                        <input type="tel" placeholder="연락처를 입력해주세요" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">증상 및 문의사항</label>
                        <textarea placeholder="증상이나 문의사항을 자세히 적어주세요" rows="4" 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors resize-none"></textarea>
                    </div>
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-primary-600 to-primary-700 text-white font-semibold py-4 px-6 rounded-xl hover:from-primary-700 hover:to-primary-800 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                        문의하기
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 