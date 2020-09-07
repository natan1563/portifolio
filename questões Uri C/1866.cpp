#include <stdio.h>

int main() {
	
	int input, input2, count1 = 1, count2, control, value;
	
	scanf("%d", &input);
	
	while(count1 <= input){
		
		scanf("%d", &input2);
		count2 = 1;	
		control = 1;
		value = 0;
		while(input2 >= count2){
			if(control >= 1){
				value+=1;
			}else{
				value-=1;
			}
			control = control * -1;
			count2++;
		}
		
	printf("%d\n", value);
	count1++;
	}
	return 0;
}
