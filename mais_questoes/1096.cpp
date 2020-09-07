#include <stdio.h>

int main() {
	
	int i = 1, j = 7, k = 0, controler = 0;
	
	while(controler < 15){
		
		if(controler < 3){
			printf("I=%d J=%d\n", i, j);
			j--;
		
		}else if(controler >= 3 && controler < 6){
			i = 3;
			j = 7 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			
			if(k >= 3){
				k = 0;
			}
			
		}else if(controler >= 6 && controler < 9){
			i = 5;
			j = 7 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			if(k >= 3){
				k = 0;
			}
			
		}else if(controler >= 9 && controler < 12){
			i = 7;
			j = 7 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
			if(k >= 3){
				k = 0;
			}
				
		}else if(controler >= 12 && controler < 15){
			i = 9;
			j = 7 - k;
			printf("I=%d J=%d\n", i, j);
			k += 1;
		}
			controler++;
		
		
	}
	return 0;
}
