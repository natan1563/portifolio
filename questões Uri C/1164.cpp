#include <stdio.h>


int main() {
	
	int delimit = 0, input = 0, guard = 0;
	
	
	scanf("%d", &delimit);
	
	for(int i  = 0; i < delimit; i++){
		
		scanf("%d", &input);
		guard = 0;
		for(int k = 1; k < input ; k++){
			
			//printf("%d\n", guard);
			if(guard == input){
				break;
			}else{
			guard +=k;
			}
		}
		
		if(guard == input){
			printf("%d eh perfeito\n", input);
		}else{
			printf("%d nao eh perfeito\n", input);
		}
		
	}
	return 0;
}
