#include <stdio.h>

int main() {
	int i = 0, j = 0, k = 0, count = 0;
	float fi = 0 , fj = 0;
	
	while(count < 33){
		
		if(count < 3){
			j++;
			printf("I=%d J=%d\n", i, j);
	 }else if(count >= 3 && count < 6){
			fi = 0.2;
			fj = 1.2 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 6 && count < 9){
			fi = 0.4;
			fj = 1.4 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 9 && count < 12){
			fi = 0.6;
			fj = 1.6 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 12 && count < 15){
			fi = 0.8;
			fj = 1.8 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 15 && count < 18){
			i = 1;
			j = 2 + k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 18 && count < 21){
			fi = 1.2;
			fj = 2.2 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 21 && count < 24){
			fi = 1.4;
			fj = 2.4 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 24 && count < 27){
			fi = 1.6;
			fj = 2.6 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 27 && count < 30){
			fi = 1.8;
			fj = 2.8 + k;
			printf("I=%.1f J=%.1f\n", fi, fj);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 30 && count < 33){
			i = 2;
			j = 3 + k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}
	
		count++;
	}
	
	return 0;
}
