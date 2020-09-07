#include <stdio.h>


int main(){
	
	int input = 0, valueX = 0 , valueY = 0 , control = 0;
	
	scanf("%d", &input);
	
	for(int i = 0; i < input; i++){
		control = 0;
		scanf("%d %d", &valueX, &valueY);
		
		if(valueX < valueY){
		
			valueX++;
			
			while(valueX < valueY){
				
				
				if(valueX % 2 == 1){
					control += valueX;
				}
				
				valueX++;
			}
			
		}else{
			
			valueY++;
			
			while(valueX > valueY){
				
				
				if(valueY % 2 == 1){
					control += valueY;
				}
				valueY++;
			}
			
		}
		
		printf("%d\n", control);
		
	}
	

	return 0;
}
