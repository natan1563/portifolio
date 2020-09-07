#include <stdio.h>
#include <string.h>

int main() {
	
	char dale[1000] = "", filter[3];	
	int left = 0, right = 0;
	
	
	
	while(scanf("%s", &dale) != EOF){
	for(int count = 0; count < strlen(dale); count++){
		if(dale[count] == '('){
			left++;
		}else if(dale[count] == ')'){
			right++;
			if(right > left){
				break;
			}
		}	
	}
	if(left == right){
		
		printf("correct\n");
		
	}else{
		
		printf("incorrect\n");
		
	}
	left = 0;
	right = 0;
	}
		
	

	return 0;
}
