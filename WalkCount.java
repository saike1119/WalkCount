public class WalkCount {
  public static void main(String[] args) {
    int start = 0;
    int goal = 100;
    int move = 3;
    int count = 0;

    System.out.println("ゴールまでに歩いた回数は"+walkCount(start,goal,move,count)+"です。");

  }
  public static int walkCount(int start,int goal,int move,int count){
    while(start < goal){
      start += move;
      count++;
    }
    return count;
  }
}
