#include <stdio.h>


int main(){
	int input = 0, value1 = 0, value2 = 0;
	float fvalue1, fvalue2; 
	
	scanf("%d", &input);
	
	for(int count = 0; count < input; count++){
		scanf("%d %d", &value1, &value2);
		
		if(value2 == 0){
			printf("divisao impossivel\n");
		}else{
			 fvalue1 = value1;
			 fvalue2 = value2;
			 printf("%.1f\n", fvalue1 / fvalue2);
		}
		
	}
	
	return 0;
}
