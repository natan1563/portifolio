#include <stdio.h>

int main(){
	int value1 = 0, value2 = 0, count;
	
	scanf("%d %d", &value1, &value2);
	
	while(value2 < value1){
		
		if(value2 < 0){
			value2++;
			if(value2 % 2 != 0){
				count += value2;
			}
		}else{
			if(value2 % 2 != 0){
				count += value2;
			}
			value2++;
		}
			
	}
	while(value1 < value2){
		
	if(value2 < 0){
			value2++;
			if(value2 % 2 != 0){
				count += value2;
			}
		}else{	
			if(value1 % 2 != 0){
				count +=value1;
			}
		value1++;
		}
	}
	
	printf("%d\n", count);
	return 0;
}
