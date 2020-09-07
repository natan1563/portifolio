#include <stdio.h>
#include <stdio.h>
int main() {
	
	int ms = 0, sec = 0;
	
	for(ms = 0; ms <= 1000; ms++){
		if(ms == 1000){
			sec++;
			printf("%d ", sec);
			ms = 0;
		}
		
		if(sec == 10){
			break;
		}
		
	}
	
	return 0;
}


