#include <stdio.h>

int main(){
	int input = 0, values = 0, multi2 = 0, multi3 = 0, multi4 = 0, multi5 = 0;
	
	scanf("%d", &input);
	
	for(int count = 0; count < input; count++){
		
		scanf("%d", &values);
		if(values % 2 == 0){
			multi2++;
		}
		if(values % 3 == 0){
			multi3++;
		}	
		if(values % 4 == 0){
			multi4++;
		}	
		if(values % 5 == 0){
			multi5++;
		}
	}
	
	printf("%d Multiplo(s) de 2\n%d Multiplo(s) de 3\n%d Multiplo(s) de 4\n%d Multiplo(s) de 5\n", multi2, multi3, multi4, multi5);
	
	return 0;
}
