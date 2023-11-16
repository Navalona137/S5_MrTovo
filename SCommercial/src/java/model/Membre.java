package model;

import connexion.Connexion;
import java.lang.reflect.Field;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Membre {
    String id;
    String idPersonne;
    String idService;
    String email;
    String mdp;

    public Membre() {
    }

    public Membre(String id, String idPersonne, String idService, String email, String mdp) {
        this.id = id;
        this.idPersonne = idPersonne;
        this.idService = idService;
        this.email = email;
        this.mdp = mdp;
    }

    public String getid() {
        return id;
    }

    public String getidPersonne() {
        return idPersonne;
    }

    public String getidService() {
        return idService;
    }

    public String getemail() {
        return email;
    }

    public String getmdp() {
        return mdp;
    }

    public void setid(String id) {
        this.id = id;
    }

    public void setidPersonne(String idPersonne) {
        this.idPersonne = idPersonne;
    }

    public void setidService(String idService) {
        this.idService = idService;
    }

    public void setemail(String email) {
        this.email = email;
    }

    public void setmdp(String mdp) {
        this.mdp = mdp;
    }
    
    public int rowCount(Connection c) throws Exception {
        int count = 0;
        boolean isOpen=false;
        try {
            if(c==null){
                isOpen=true;
                Connexion con = new Connexion();
                c = con.connexPost();
            }
            Statement stmt = c.createStatement();
            ResultSet rs = stmt.executeQuery(String.format("select count(*) from membre")); 
            
            while ( rs.next() ) {
                count = rs.getInt(1);
            }
            rs.close();
        } catch (SQLException e) {
            System.out.println("[ERROR] rowCount : " + e.getMessage());
        }finally{
            try {
                if (isOpen){
                    c.close();
                } 
            } catch (Exception e) {
                e.printStackTrace();
            }
        }
        return count;
    }
    
    public Membre[] listAll(Connection c) throws Exception{
        boolean isOpen=false;
        Membre[] objs = new Membre[rowCount(c)];
        Field[] attribut = this.getClass().getDeclaredFields();
        
        try {
            if(c==null){
                isOpen=true;
                Connexion con = new Connexion();
                c = con.connexPost();
            }
            Statement stat = c.createStatement();  
            String sql = "select * from " + this.getClass().getName().split("\\.")[1];
            ResultSet res = stat.executeQuery(sql); 
            int i=0;
            while(res.next()){
                objs[i] = new Membre(res.getString("id"), res.getString("idPersonne"), res.getString("idService"), res.getString("email"), res.getString("mdp"));
                i++;
            }
            stat.close();
            res.close();
        }catch(Exception e){
            System.out.println("[ERROR] listAll : " + e.getMessage());
        }finally{
            try {
                if (isOpen){
                    c.close();
                } 
            } catch (Exception e) {
                e.printStackTrace();
            }
        }
        return objs;
    }
}
