#include <stdio.h>

int main() {
	
	int delimit, input;
	
	scanf("%d", &delimit);
	
	for(int i = 0; i < delimit; i++){
		scanf("%d", &input);
		
		if(input == 0){
			printf("NULL\n");
		}else if(input % 2 != 0){
			printf("ODD");
		}else if(input % 2 == 0){
			printf("EVEN");
		}
		
		if(input < 0){
			printf(" NEGATIVE\n");
		}else if(input > 0){
			printf(" POSITIVE\n");
		}
	}
	return 0;
}
