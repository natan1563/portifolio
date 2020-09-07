#include <stdio.h>


int main() {
	int i = 1, j = 7, k = 0, count = 0;
	
	while(count < 15){
		
		if(count < 3){
			printf("I=%d J=%d\n", i, j);
			j--;
		}else if(count >= 3 && count < 6){
			i = 3;
			j = 9 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 6 && count < 9){
			i = 5;
			j = 11 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 9 && count < 12){
			i = 7;
			j = 13 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
		}else if(count >= 12 && count < 15){
			i = 9;
			j = 15 - k;
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
