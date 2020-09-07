#include <stdio.h>

int main() {
	
	int input1 = 0, input2 = 0, maior, menor, total;
	
	scanf("%d %d", &input1, &input2);
	
	if(input1 > input2){
		maior = input1;
		menor = input2;
	}else{
		maior = input2;
		menor = input1;
	}
	for(int count = 0;count <= maior;count++){
		if(count >= menor && count <= maior && count % 13 != 0){
			total+=count;
		}
	}
	
	printf("%d\n", total);
	
	return 0;
}
