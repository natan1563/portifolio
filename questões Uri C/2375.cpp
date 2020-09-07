#include <stdio.h>

int main() {
	
	int di, altu, largu, profu;
	
	scanf("%d\n%d %d %d", &di, &altu, &largu, &profu);
	
	if(di <= altu && di <= largu && di <= profu){
		printf("S\n");
	}else{
		printf("N\n");
	}
	return 0;
}
