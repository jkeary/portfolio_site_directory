
2000REM************************************* 
2010 REM         Major Scale Logical Sieve Routine                            
2020REM************************************* 
2030 FOR X = LOWP TO LOWP+ELEMENTS-1 
2040 IF X MOD 3 <> 2 AND X MOD 4  = 0 OR  X 
MOD 3 <> 1 AND X MOD 4 =  1  
OR  X MOD 3  = 2 AND X MOD 4  = 2 OR X MOD 3 
<> 0 AND X MOD 4  = 3  
THEN PRINT P$(X);" "; ELSE 2050 
2045 PRINT #1, 
NOTEON;X;VELOCITY;ARTDUR;CHANNEL 
2046 NOTEON=NOTEON+DURATION 
2050 NEXT X 
2060 RETURN


Previous example shows how to calculate the Major 
Scale Sieve. Line 2040 can be read as Òif x mod 3 is not
equal to 2 and X mod 4 is equal to 0, or if X mod 3 is not
equal to 1  and X mod 4 is equal to 1, or if X mod 3 is
equal to 2 and X mod 4 is equal to 2, or if X mod 3 is not
equal to 0  and  X mod 4 is equal to 3 then X passes the 
test.Ó[1
       

Then the execution of the program will show the 
major scale:  
Enter number of background  scale  elements: 
12 
Enter scale type: (1=major,  2=harm.  Minor, 
3=pentatonic) 
? 1 
  C1 D1 E1 F1 G1 A1 B
  
