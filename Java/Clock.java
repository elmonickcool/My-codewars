public class Clock
{
  public static int Past(int h, int m, int s) 
  {
    int total_seconds=( h * 3600 ) + (m * 60) + s;
    int total_clock = total_seconds * 1000;
    return total_clock;
  }
}