# DB_TeamProject


### 프로젝트 소개
  - PHP와 MySQL을 활용한 COVID-19 종합 관리 시스템 
  - 정부, 제약사 (모더나/화이자), 병원 (영남대/경북대/대구대) 총 6개의 기관
  - 정부 : 백신 보유 상태와 확진자 통계 현황 등을 제공하여 종합 관리 역할
  - 제약사 : 모더나/화이자의 백신 재고량, 생산계획, 현재 주문량 제공 등의 역할
  - 병원 : 환자에 대한 입원 날짜, 사망 날짜, 코로나 검사 날짜, 확진 여부 등의 정보 제공 역할
  - 제약사, 병원은 모두 정부의 DB를 이용해야 함.
---
### 개발 기간
  - 21.11~21.12
---
### E-R Diagram
  ![image](https://user-images.githubusercontent.com/124030255/235300825-d454b752-9f8f-406e-9ca8-a729e0162420.png)
---

### Web Page
  ![image](https://user-images.githubusercontent.com/124030255/235300932-1285d2f1-0783-49b7-ab89-8b9b8e52f87c.png)


  ![image](https://user-images.githubusercontent.com/124030255/235300954-bd0a73dc-4af4-46cd-9e62-58b702991ab4.png)
  - `병원마다 환자 수 , 병상 수 등을 조회 가능 `


  ![image](https://user-images.githubusercontent.com/124030255/235300976-13727f67-0d71-47c7-8d4c-ddb8ab825d68.png)
  - `주민번호를 통해 환자 정보 조회 가능`


  ![image](https://user-images.githubusercontent.com/124030255/235301019-5401e290-1df9-495d-afe1-724b6e3b1843.png)
  - `해당 제약사의 백신 보유량, 가격 등 조회 가능`


  ![image](https://user-images.githubusercontent.com/124030255/235301054-9ac06561-b3fe-411e-a347-3d92615a2dd2.png)
  - `해당 백신에 대한 구매정보 조회 가능, 구매수량은 제약사 보유수량에 실시간으로 반영됨 
  (즉, 병원에서 구매한 수량이 실시간으로 반영되어 제약사 보유수량이 구매수량만큼 줄어든다.)`
