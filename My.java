class X{
    public int a;

}
class My{
    public static void main(String[] args) {
        X obj = new X();
        obj.a = 50;
        X obj2 = obj;
        obj2.a = 70;
        System.out.println(obj.a+" "+obj2.a);;
    }
}