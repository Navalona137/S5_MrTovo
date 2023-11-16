package servlet;

import connexion.Connexion;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import model.Service;

public class LoginServlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        int tailleA = 0;
        try{
            System.out.println("tonga");
            Connexion con=new Connexion();
            Service service = new Service();
            System.out.println("tongaaa");
            tailleA = service.rowCount(con.connexPost());
            System.out.println(tailleA);
        }catch(Exception e){
            e.printStackTrace();
        }
        Service[] a = new Service[tailleA];
        try{
            Connexion con=new Connexion();
            Service ser = new Service();
            a = ser.listAll(con.connexPost());
        }catch(Exception e){
            e.printStackTrace();
        }
        request.setAttribute("service", a);
        RequestDispatcher dispat = request.getRequestDispatcher("./login.jsp"); 
        dispat.forward(request,response);
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
