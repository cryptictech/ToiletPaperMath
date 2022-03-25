public class ToiletPaperMath{
   /**
   * The toilet paper math method written in
   *   PHP determines the truthiness of toilet paper 
   *   math companies.
   *
   * @param Array paper_assertions Is an
   *   array where each element is an array with 
   *   exactly 2 numbers that toilet paper
   *   companies believe equal each other.
   *
   * @return boolean Truthiness of toilet paper
   *   math.
   **/
   public function toilet_paper_math(Array $paper_assertions){
      $truthiness = false;
      foreach($assertion in $paper_assertions){
         $truthiness = $truthiness && ($assertion[0]
         == $assertion[1]);
      }
   
      return $truthiness; //False, probably
   }
}
