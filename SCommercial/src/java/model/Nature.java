package model;

import connexion.Connexion;
import java.lang.reflect.Field;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class Nature {
    String id;
    String nom;

    public Nature() {
    }

    public Nature(String id, String nom) {
        this.id = id;
        this.nom = nom;
    }

    public String getid() {
        return id;
    }

    public String getnom() {
        return nom;
    }

    public void setid(String id) {
        this.id = id;
    }

    public void setnom(String nom) {
        this.nom = nom;
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
            ResultSet rs = stmt.executeQuery(String.format("select count(*) from nature")); 
            
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
    
    public Nature[] listAll(Connection c) throws Exception{
        boolean isOpen=false;
        Nature[] objs = new Nature[rowCount(c)];
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
                objs[i] = new Nature(res.getString("id"), res.getString("nom"));
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
