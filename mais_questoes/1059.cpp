#include <stdio.h>

int main() {
	
	int dale = 1;
	
	while(dale <= 100){
		if(dale % 2 == 0){
			printf("%d\n", dale);
		}
		dale++;
	}
	
	return 0;
}
