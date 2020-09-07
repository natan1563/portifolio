#include <stdio.h>


int main() {
	
	int input = 0, count = 1, filter = 0;
	
	while(scanf("%d", &input) != 0){
		if(input == 0){
			break;
		}else{	
			filter = 0;
			count = 1;
			while(count <= 5){
				if(input % 2 == 0){
					filter+=input;
					count++;
				}
				input++;
				
			}
			printf("%d\n", filter);
		}
	}
	
	return 0;
}
