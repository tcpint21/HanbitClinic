# 한빛 클리닉 워드프레스 테마

한빛 클리닉 내과 홈페이지를 위한 커스텀 워드프레스 테마입니다.

## 개발 환경 설정

### 필수 요구사항
- Docker
- Docker Compose

### 설치 및 실행

1. **환경 시작**
   ```bash
   docker-compose up -d
   ```

2. **워드프레스 접속**
   - 브라우저에서 `http://localhost:8080` 접속
   - 워드프레스 초기 설정 완료

3. **테마 개발**
   - `wordpress-data/wp-content/themes/hanbit-clinic/` 폴더에서 테마 개발
   - 코드 수정 후 브라우저 새로고침으로 확인

### 환경 중지
```bash
docker-compose down
```

## 프로젝트 구조

```
HanbitClinic/
├── docker-compose.yml          # Docker 환경 설정
├── wordpress-data/             # 워드프레스 파일들 (자동 생성)
│   └── wp-content/
│       └── themes/
│           └── hanbit-clinic/  # 한빛 클리닉 테마
└── README.md                   # 프로젝트 설명
```

## 테마 개발

테마 파일들은 `wordpress-data/wp-content/themes/hanbit-clinic/` 폴더에서 개발합니다.

### 주요 파일들
- `style.css` - 테마 정보 및 스타일
- `index.php` - 메인 템플릿
- `functions.php` - 테마 기능
- `header.php` - 헤더 템플릿
- `footer.php` - 푸터 템플릿 