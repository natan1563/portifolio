#include <stdio.h>
#include<math.h>

int main(){
	int L = 0, C = 0, R1 = 0, R2 = 0, Dtotal = 0, Atotal = 0, maior = 0;
	char cond[3];
	scanf("%d %d %d %d", &L, &C, &R1, &R2);
	while(L != 0 && C != 0 && R1 != 0 && R2 != 0){
		
		cond[1] = 'N';
		
		if(R1 > R2){
			maior = R1 + R1;
		}else{
			maior = R2 + R2;
		}
		
		if(maior <= L && maior <= C){
			if(sqrt(pow((L - R2 - R1), 2) + pow((C - R2 - R1), 2)) >= R1 + R2){
			cond[1] = 'S';
			}
		}
		printf("%c\n", cond[1]);
		scanf("%d %d %d %d", &L, &C, &R1, &R2);
	}
	return 0;
}
