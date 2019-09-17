<?php
namespace App\Services\IntegracaoCallFlex;

final class FtpCallFlex
{
    private $resource = NULL;
    
    const PATH_LOCAL = "/tmp/";
    
    public function __construct(string $host, int $port = 21, $timeout = 90, array $auth = [])
    {
        try {
            $this->resource = ftp_connect($host, $port, $timeout);
            if($this->resource === FALSE){
                throw new \Exception("Erro na conexão FTP.");
            }
            
            if(array_key_exists('user', $auth) && array_key_exists('pass', $auth)){
                if(ftp_login($this->resource, $auth['user'], $auth['pass']) === FALSE){
                    ftp_close($this->resource);
                    throw new \Exception("Erro no login FTP.");
                }
                
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function pasv(bool $pasv)
    {
        try {
            if(ftp_pasv($this->resource, $pasv) === FALSE){
                $this->close();
                throw new \Exception("Erro ao setar o modo passivo no FTP.");
            }
        } catch (\Exception $e) {
            throw $e;
        }
        return $this;
    }
    
    public function get(string $localFile, string $remoteFile)
    {
        try {
            if(ftp_get($this->resource, $localFile, $remoteFile, FTP_BINARY) === FALSE){
                $this->close();
                throw new \Exception("Erro ao copiar o arquivo remoto.");
            }
            return $this;
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function put(string $localFile, string $remoteFile)
    {
        try {
            if(ftp_put($this->resource, $remoteFile, $localFile, FTP_BINARY) === FALSE){
                $this->close();
                throw new \Exception("Erro ao subir o arquivo remoto.");
            }
            return $this;
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function delete(string $remoteFile)
    {
        try {
            if(ftp_delete($this->resource, $remoteFile) === FALSE){
                $this->close();
                throw new \Exception("Erro ao remover o arquivo remoto.");
            }
            return $this;
        } catch (\Exception $e) {
            throw $e;
        }
    }
    
    public function chdir(string $path)
    {
        try {
            if(ftp_chdir($this->resource, $path) === FALSE){
                $this->close();
                throw new \Exception("Erro de acesso a pasta FTP.");
            }
        } catch (\Exception $e) {
            throw $e;
        }
        return $this;
    }
    
    public function close()
    {
        if($this->resource){
            ftp_close($this->resource);
        }
        $this->resource = NULL;
    }

    public function __destruct()
    {
        $this->close();
    }
}

