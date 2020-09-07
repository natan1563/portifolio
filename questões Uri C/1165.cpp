#include <stdio.h>


int main() {
	
	int delimit = 0, input = 0, guard = 0;
	
	
	scanf("%d", &delimit);
	
	for(int i  = 0; i < delimit; i++){
		
		scanf("%d", &input);
		guard = 0;
		for(int k = 2; k < input ; k++){
			if(input % k == 0){
				guard++;
			}
		}
		
		if(guard != 0){
			printf("%d nao eh primo\n", input);
		}else{
			printf("%d eh primo\n", input);
		}
	}
	return 0;
}
