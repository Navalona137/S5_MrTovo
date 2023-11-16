package function;

import java.sql.Connection;
import java.sql.Statement;
import java.lang.reflect.Field;

import connexion.Connexion;

public class Function {
    public String strInsert(Object objets)throws Exception{
        Field[] attribut=objets.getClass().getDeclaredFields();
        String val="default,";

        for(int i=1;i<attribut.length;i++){
            Object invocation= objets.getClass().getMethod("get"+attribut[i].getName()).invoke(objets);

            if(attribut[i].getType().getSimpleName().equals("String")){
                invocation="'"+invocation+"'";
            }
            
            if(attribut[i].getType().getSimpleName().equals("Date")){
                invocation="'"+invocation+"'";
            }

            if(i!=(attribut.length-1)){
                val=val+invocation+",";
            }else{
                val=val+invocation;
            }
        }
        return val;
    }
    
    public void insertion(Connection c)throws Exception{
        try {
            if(c==null){
                Connexion con = new Connexion();
                c = con.connexPost();
            }
        }catch(Exception e){}

        Statement stat = c.createStatement();        
        String i = strInsert(this); //l'objet a inserer
        String nomClasse = this.getClass().getSimpleName();
        String sql = "INSERT INTO "+nomClasse+" VALUES  ("+i+")";
        stat.executeUpdate(sql);
        System.out.println(sql);
        stat.close();
        c.close();
    }
   

}
